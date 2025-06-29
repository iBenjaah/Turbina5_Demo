<?php

namespace ADP\BaseVersion\Includes\Shortcodes;

use ADP\BaseVersion\Includes\Context;
use ADP\BaseVersion\Includes\Core\Rule\SingleItemRule;
use ADP\BaseVersion\Includes\Helpers\Helpers;
use Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore;
use ADP\BaseVersion\Includes\Core\Rule\CartCondition\ComparisonMethods;

defined('ABSPATH') or exit;

class SqlGeneratorPersistent
{
    /**
     * @var Context|null
     */
    protected $context;

    protected $appliedRules = array();

    /**
     * @var array
     */
    protected $join = array();

    /**
     * @var array
     */
    protected $where = array();

    /**
     * @var array
     */
    protected $excludeIds = array();

    /**
     * @var array
     */
    protected $customTaxonomies = array();

    protected $count = null;
    protected $offset = null;

    public function __construct()
    {
        $this->customTaxonomies = array_values(array_map(function ($tax) {
            return $tax->name;
        }, Helpers::getCustomProductTaxonomies()));

        $this->context = null;
    }

    /**
     * @param Context|SingleItemRule $contextOrRule
     * @param SingleItemRule|null $deprecated
     *
     * @return bool
     */
    public function applyRuleToQuery($contextOrRule, $deprecated = null)
    {
        $this->context = adp_context();
        $rule          = $contextOrRule instanceof SingleItemRule ? $contextOrRule : $deprecated;
        $filters       = $rule->getFilters();
        if ( ! $filters) {
            return false;
        }

        $filter = reset($filters);

        if ( ! $filter->isValid()) {
            return false;
        }

        $excludeIds = array();
        if ($filter->getExcludeProductIds()) {
            $excludeIds = $filter->getExcludeProductIds();
        }

        $generated = $this->generateFilterSqlByType($filter->getType(), $filter->getValue());

        $this->excludeIds = array_merge($this->excludeIds, $excludeIds);

        if ( ! empty($generated)) {
            $this->where[] = $generated;
        }

        $this->appliedRules[] = $rule;

        return true;
    }

    public function clear() {
        $this->appliedRules = array();
        $this->where = array();
        $this->join = array();
        $this->excludeIds = array();
        $this->count = null;
        $this->offset = null;
    }

    public function getJoin()
    {
        return $this->join;
    }

    public function getWhere()
    {
        return $this->where;
    }

    public function getExcludeWhere()
    {
        if (count($this->excludeIds) > 0) {
            return [$this->genSqlProducts($this->excludeIds, ComparisonMethods::NOT_IN_LIST)];
        }
        return [];
    }

    public function limit($count) {
        $this->count = $count;
    }

    public function offset($offset) {
        $this->offset = $offset;
    }

    public function getSql() {
        global $wpdb;

        $sql_joins    = $this->getJoin();
        $sql_where    = $this->getWhere();
        $excludeWhere = $this->getExcludeWhere();

        $sql = "SELECT post.ID as id, post.post_parent as parent_id, post_children.ID as child_id
            FROM `$wpdb->posts` AS post
            LEFT JOIN {$wpdb->posts} as post_children ON (post.ID = post_children.post_parent OR post.ID = post_children.ID)
            " . implode(" ", $sql_joins) . "
            WHERE
            post.post_type IN ( 'product', 'product_variation' ) AND post.post_status = 'publish'
            AND post_children.post_type IN ('product', 'product_variation') AND post_children.post_status = 'publish'"

            . ($sql_where ? " AND (" : "")

            . implode(" OR ", array_map(function ($v) {
                return "(" . $v . ")";
            }, $sql_where))

            . ($sql_where ? ")" : "")

            . ($excludeWhere ? " AND " : "") . implode(" AND ", array_map(function ($v) {
                return "(" . $v . ")";
            }, $excludeWhere));

        if ($this->count && $this->offset) {
            $sql .= " LIMIT {$this->offset}, {$this->count}";
        } else if ($this->count) {
            $sql .= " LIMIT {$this->count}";
        }

        return $sql;
    }

    public function getProductIds($mode = 'default') {
        global $wpdb;

        if ($this->isEmpty()) {
            return [];
        }

        $sql = $this->getSql();
        // phpcs:ignore WordPress.DB.DirectDatabaseQuery, WordPress.DB.PreparedSQL.NotPrepared
        $products = $wpdb->get_results($sql);

        if($mode == 'on_sale' || $mode == 'bogo') {
            $productIds = wp_parse_id_list(array_merge(wp_list_pluck($products, 'id'),
                array_diff(wp_list_pluck($products, 'parent_id'), array(0))));
        } else {
            $productIds = wp_parse_id_list(wp_list_pluck($products, 'child_id'));
        }

        return $productIds;
    }

    protected function generateFilterSqlByType($type, $value, $comparisonMethod = ComparisonMethods::IN_LIST, $prop=null)
    {
        if (in_array($type, $this->customTaxonomies)) {
            return $this->genSqlCustomTaxonomy($type, $value, $comparisonMethod);
        }

        $method_name = "genSql" . ucfirst($type);

        return method_exists($this, $method_name) ? call_user_func([$this, $method_name], $value, $comparisonMethod, $prop) : false;
    }

    protected function genSqlProducts($productIds, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        $where = [
            $this->compareToSql('post.ID', $comparisonMethod, $productIds),
            $this->compareToSql('post.post_parent', $comparisonMethod, $productIds),
            $this->compareToSql('post_children.ID', $comparisonMethod, $productIds),
        ];

        $method = ComparisonMethods::IN_LIST === $comparisonMethod ? ' OR ' : ' AND ';

        return "(" . implode($method, $where) . ")";
    }

    protected function addJoin($sqlJoin)
    {
        $hash = md5($sqlJoin);
        if ( ! isset($this->join[$hash])) {
            $this->join[$hash] = $sqlJoin;
        }
    }

    protected function genSqlProduct_sku($skus, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        global $wpdb;

        $table = "postmeta_sku";

        $where   = [
            "{$table}.meta_key = '_sku'",
            $this->compareToSql("{$table}.meta_value", ComparisonMethods::IN_LIST, $skus),
        ];
        $where = "(" . implode(" AND ", $where) . ")";

        return $this->getSqlByPostmeta($where, $comparisonMethod, $table);
    }

    protected function genSqlProduct_sellers($sellers, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        global $wpdb;

        return $this->compareToSql('post.post_author', $comparisonMethod, $sellers);
    }

    protected function genSqlProduct_tags($tags, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        return $this->genSqlByTermIds('product_tag', $tags, $comparisonMethod);
    }

    protected function genSqlProduct_categories($categories, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        $categoriesWithChildCategories = array();

        foreach ($categories as $category) {
            $categoriesWithChildCategories[] = $category;
            $children = get_term_children($category, 'product_cat');
            if ($children && !is_wp_error($children)) {
                $categoriesWithChildCategories = array_merge($categoriesWithChildCategories, $children);
            }
        }

        return $this->genSqlByTermIds('product_cat', $categoriesWithChildCategories, $comparisonMethod);
    }

    protected function genSqlProduct_category_slug($categorySlugs, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        global $wpdb;

        $where = $this->compareToSql('term_1.slug', ComparisonMethods::IN_LIST, $categorySlugs);

        if(ComparisonMethods::NOT_IN_LIST === $comparisonMethod) {
            return "post.ID NOT IN (
                SELECT object_id FROM {$wpdb->term_relationships} as term_rel_1
                LEFT JOIN {$wpdb->term_taxonomy} as term_tax_1 ON term_rel_1.term_taxonomy_id = term_tax_1.term_taxonomy_id
                LEFT JOIN {$wpdb->terms} as term_1 ON term_tax_1.term_id = term_1.term_id
                WHERE {$where}
            )";
        }

        $this->addJoin("LEFT JOIN {$wpdb->term_relationships} as term_rel_1 ON post.ID = term_rel_1.object_id");
        $this->addJoin("LEFT JOIN {$wpdb->term_taxonomy} as term_tax_1 ON term_rel_1.term_taxonomy_id = term_tax_1.term_taxonomy_id");
        $this->addJoin("LEFT JOIN {$wpdb->terms} as term_1 ON term_tax_1.term_id = term_1.term_id");

        return $where;
    }

    protected function genSqlProduct_custom_fields($values, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        global $wpdb;
        $table = "postmeta_custom_fields";
        $where = array();

        $custom_fields = array();
        foreach ($values as $value) {
            $value = explode("=", $value);
            if (count($value) !== 2) {
                continue;
            }
            $custom_fields[$value[0]] = $value[1];
        }

        foreach ($custom_fields as $key => $value) {
            $tmp_where   = [
                "{$table}.meta_key = '{$key}'",
                $this->compareToSql("{$table}.meta_value", ComparisonMethods::EQ, $value),
            ];

            $where[] = "(" . implode(" AND ", $tmp_where) . ")";
        }

        $where = "( " . implode(' OR ', $where) . " )";
        return $this->getSqlByPostmeta($where, $comparisonMethod, $table);
    }

    protected function genSqlProduct_attributes($termIds, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        static $i =0;
        global $wpdb;

        //TODO check_lookup_table_exists
        $data_store      = wc_get_container()->get( LookupDataStore::class );
        $lookupTable     = $data_store->get_lookup_table_name();

        $where = $this->compareToSql("term_id", ComparisonMethods::IN_LIST, $termIds);
        // phpcs:ignore WordPress.DB.DirectDatabaseQuery, WordPress.DB.PreparedSQL.InterpolatedNotPrepared
        $taxanomies = $wpdb->get_results("SELECT DISTINCT term_id, taxonomy FROM {$lookupTable} WHERE {$where} ");

        $termIdsByTaxanomy = [];
        foreach ($taxanomies as $obj) {
            if(!isset($termIdsByTaxanomy[$obj->taxonomy])) {
                $termIdsByTaxanomy[$obj->taxonomy] = [];
            }

            $termIdsByTaxanomy[$obj->taxonomy][] = $obj->term_id;
        }

        $productIds = [];
        foreach ($termIdsByTaxanomy as $taxanomy => $termIds) {
            $where = $this->compareToSql("term_id", ComparisonMethods::IN_LIST, $termIds);
            // phpcs:ignore WordPress.DB.DirectDatabaseQuery, WordPress.DB.PreparedSQL.InterpolatedNotPrepared
            $products = $wpdb->get_results("SELECT product_id, product_or_parent_id FROM {$lookupTable} WHERE {$where} ");

            $productIds[] = wp_parse_id_list(array_merge(
                wp_list_pluck($products, 'product_id'),
                array_diff(wp_list_pluck($products, 'product_or_parent_id'), array(0))
            ));
        }

        $productIds = \array_values(array_intersect(...$productIds));

        return $this->genSqlProducts($productIds, $comparisonMethod);
    }

    protected function genSqlCustomTaxonomy($taxName, $values, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        return $this->genSqlByTermIds($taxName, $values, $comparisonMethod);
    }

    protected function genSqlByTermIds($taxName, $termIds, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        static $i=0;
        global $wpdb;

        $relationshipTableName = str_replace('-', '_', "term_rel_{$taxName}");
        $taxTableName          = str_replace('-', '_', "term_tax_{$taxName}");

        $where = $this->compareToSql("{$taxTableName}.term_id", ComparisonMethods::IN_LIST, $termIds);

        if(ComparisonMethods::NOT_IN_LIST === $comparisonMethod) {

            return "( " .implode(" AND ", array_map(function($id) use($wpdb, $relationshipTableName, $taxTableName, $where) {
                return "{$id} NOT IN(
                    SELECT object_id FROM {$wpdb->term_relationships} as {$relationshipTableName}
                    LEFT JOIN {$wpdb->term_taxonomy} as {$taxTableName} ON {$relationshipTableName}.term_taxonomy_id = {$taxTableName}.term_taxonomy_id
                    WHERE $where
                )";
            }, ['post.ID', 'post.post_parent', 'post_children.ID'])) . " )";
        }

        $this->addJoin( "LEFT JOIN {$wpdb->term_relationships} as {$relationshipTableName} ON post.ID = {$relationshipTableName}.object_id" );
        $this->addJoin( "LEFT JOIN {$wpdb->term_taxonomy} as {$taxTableName} ON {$relationshipTableName}.term_taxonomy_id = {$taxTableName}.term_taxonomy_id" );

        return $where;
    }

    protected function genSqlProduct_custom_attributes($values, $comparisonMethod = ComparisonMethods::IN_LIST)
    {
        global $wpdb;
        $table = "postmeta_custom_attr";

        $where = [];

        foreach ($values as $value) {
            //for variations products
            [$k, $v] = explode(':', $value);
            $where[] = "{$table}.meta_key = 'attribute_{$k}' AND ({$table}.meta_value = '{$v}' OR {$table}.meta_value = '')";

            $tmp_where   = [
                "{$table}.meta_key LIKE 'adp_custom_product_attribute_%'",
                $this->compareToSql("{$table}.meta_value", ComparisonMethods::CONTAINS, $value),
            ];

            $where[] = "(" . implode(" AND ", $tmp_where) . ")";
        }

        $where = "( " . implode(' OR ', $where) . " )";

        return $this->getSqlByPostmeta($where, $comparisonMethod, $table);
    }

    protected function getSqlByPostmeta($where, $comparisonMethod, $table = 'postmeta_1') {
        global $wpdb;
        if(ComparisonMethods::NOT_IN_LIST === $comparisonMethod) {
            return "post_children.ID NOT IN(
                SELECT post_id
                FROM {$wpdb->postmeta} as {$table}
                WHERE $where
            )";
        }

        $this->addJoin("LEFT JOIN {$wpdb->postmeta} as {$table} ON post_children.ID = {$table}.post_id");

        return $where;
    }

    protected function genSqlAny()
    {
        return '1 = 1';
    }

    public function isEmpty()
    {
        return count($this->appliedRules) === 0;
    }

    protected function compareToSql($key, $comparisonMethod, $value)
    {
        if(is_array($value)) {
            $esc_value = "( '" . implode("','", array_map('esc_sql', $value)) . "' )";
            switch($comparisonMethod) {
                case ComparisonMethods::IN_LIST:
                    return "{$key} IN {$esc_value}";
                case ComparisonMethods::NOT_IN_LIST:
                    return "{$key} NOT IN {$esc_value}";
            }
        } else {
            $esc_value = esc_sql($value);
            $sql_value = is_numeric($esc_value) ? $esc_value : "'{$esc_value}'";
            $sql_method = null;

            switch($comparisonMethod) {
                case ComparisonMethods::CONTAINS:
                    $sql_method = "LIKE";
                    $sql_value = "'%{$esc_value}%'";
                    break;
                case ComparisonMethods::NOT_CONTAINS:
                    $sql_method = "NOT LIKE";
                    $sql_value = "'%{$esc_value}%'";
                    break;
                case ComparisonMethods::LATER:
                    $sql_method = ComparisonMethods::LT;
                    break;
                case ComparisonMethods::EARLIER:
                    $sql_method = ComparisonMethods::MT;
                    break;
                case in_array($comparisonMethod, ComparisonMethods::BASIC_METHODS):
                    $sql_method = $comparisonMethod;
                    break;
            }

            if (!is_null($sql_method)) {
                return "{$key} {$sql_method} {$sql_value}";
            }
        }
        return '1 = 0';
    }
}
