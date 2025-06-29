<?php

namespace ADP\BaseVersion\Includes\AdminExtensions;

use ADP\BaseVersion\Includes\AdminExtensions\AdminPage\Tabs\Options;
use ADP\BaseVersion\Includes\Context;
use ADP\BaseVersion\Includes\Database\Repository\RuleRepository;
use ADP\BaseVersion\Includes\SpecialStrategies\CompareStrategy;

defined('ABSPATH') or exit;

class AdminNotice
{
    const activationNoticeOption = 'advanced-dynamic-pricing-for-woocommerce-activation-notice-shown';
    const disabledRulesOption = 'wdp_rules_disabled_notify';
    const dismissedPersistenceRulesNoticeOption = 'wdp_dismissed_persistence_rules_notice';
    const persistenceRulesNoticeThreshold = 30;
    const dismissedNoticeOption = 'wdp_dismissed_notice_';

    /**
     * @var Context
     */
    protected $context;

    public function __construct($context)
    {
        $this->context = $context;
    }

    public function register()
    {
        //phpcs:ignore WordPress.Security.NonceVerification.Recommended
        if (isset($_GET['page']) && $_GET['page'] == 'wdp_settings') {
            //phpcs:disable WordPress.Security.NonceVerification.Recommended
            if (isset($_GET['from_notify'])) {
                $this->clearOutOfTimeNotices();
            }
        }
        //phpcs:ignore WordPress.Security.NonceVerification.Recommended
        if (isset($_GET['page']) && $_GET['page'] == 'wdp_settings') {
            //phpcs:disable WordPress.Security.NonceVerification.Recommended
            if (isset($_GET['from_enable_persistence_rules_notice'])) {
                $this->dismissPersistenceRulesNotice();
            }
        }
        //phpcs:ignore WordPress.Security.NonceVerification.Recommended
        if (isset($_GET['wp-']) && $_GET['page'] == 'wdp_settings') {
            //phpcs:ignore WordPress.Security.NonceVerification.Recommended
            if (isset($_GET['from_enable_persistence_rules_notice'])) {
                $this->dismissPersistenceRulesNotice();
            }
        }

        add_action('admin_notices', array($this, 'displayPluginActivatedMessage'));
        add_action('admin_notices', array($this, 'notifyRuleDisabled'), 10);
//        add_action('admin_notices', array($this, 'notifyCouponsDisabled'), 10);
        add_action('admin_notices', array($this, 'notifyAboutPersistenceRules'), 10);

        add_action('wp_ajax_adp_notice_dismiss', array( $this, 'noticeDismiss'));
    }

    public static function cleanUp()
    {
        delete_option(self::activationNoticeOption);
        delete_option(self::disabledRulesOption);
    }

    public static function isDismissedNotice($key)
    {
        return get_option(self::dismissedNoticeOption.$key, false);
    }

    public function noticeDismiss()
    {
        //phpcs:ignore WordPress.Security.NonceVerification, WordPress.Security.ValidatedSanitizedInput
        $key = htmlspecialchars($_POST['key'] ?? "", ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401);
        update_option(self::dismissedNoticeOption.$key, true);
        wp_send_json_success();
    }

    public function addActivationNotice()
    {
        update_option(self::activationNoticeOption, true);
    }

    public function isActivationNotice()
    {
        return get_option(self::activationNoticeOption, false);
    }

    public function removeActivationNotice()
    {
        delete_option(self::activationNoticeOption);
    }

    public function addOutOfTimeNotice($ruleId, $exclusive)
    {
        $value = get_option(self::disabledRulesOption, array());

        $value[] = array(
            'id'           => $ruleId,
            'is_exclusive' => false,
        );

        update_option(self::disabledRulesOption, $value);
    }

    public function getOutOfTimeNotices()
    {
        return get_option(self::disabledRulesOption, array());
    }

    public function clearOutOfTimeNotices()
    {
        update_option(self::disabledRulesOption, array());
    }

    public function displayPluginActivatedMessage()
    {
        if ($this->isActivationNotice()) {
            return;
        }

        ?>
        <div class="notice notice-success is-dismissible">
            <p><?php printf(
                    esc_html__('Advanced Dynamic Pricing for WooCommerce is available', 'advanced-dynamic-pricing-for-woocommerce')
                            .'<a href="%s">' .esc_html__('on this page', 'advanced-dynamic-pricing-for-woocommerce') .'</a>.',
                            'admin.php?page=wdp_settings'); ?></p>
        </div>
        <?php
        $this->addActivationNotice();
    }

    public function notifyRuleDisabled()
    {
        $disabledRules = $this->getOutOfTimeNotices();

        if ($disabledRules) {
            $disabledCountCommon    = 0;
            $disabledCountExclusive = 0;
            foreach ($disabledRules as $rule) {
                $isExclusive = $rule['is_exclusive'];

                if ($isExclusive) {
                    $disabledCountExclusive++;
                } else {
                    $disabledCountCommon++;
                }
            }

            $ruleEditUrl = add_query_arg(array(
                'page'        => 'wdp_settings',
                'from_notify' => '1'
            ), admin_url('admin.php'));
            $ruleEditUrl = add_query_arg('tab', 'rules', $ruleEditUrl);

            $format = "<p>%s %s <a href='%s'>%s</a></p>";

            if ($disabledCountCommon) {
                $noticeMessage = "";
                $noticeMessage .= '<div class="notice notice-success is-dismissible">';
                if (1 === $disabledCountCommon) {
                    $noticeMessage .= sprintf($format, "",
                        __("The common rule was turned off, it was running too slow.",
                            'advanced-dynamic-pricing-for-woocommerce'), $ruleEditUrl,
                        __("Edit rule", 'advanced-dynamic-pricing-for-woocommerce'));
                } else {
                    $noticeMessage .= sprintf($format, $disabledCountCommon,
                        __("common rules were turned off, it were running too slow.",
                            'advanced-dynamic-pricing-for-woocommerce'), $ruleEditUrl,
                        __("Edit rule", 'advanced-dynamic-pricing-for-woocommerce'));
                }

                $noticeMessage .= '</div>';

                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo $noticeMessage;
            }

            if ($disabledCountExclusive) {
                $noticeMessage = '<div class="notice notice-success is-dismissible">';
                if (1 === $disabledCountExclusive) {
                    $noticeMessage .= sprintf($format, "",
                        __("The exclusive rule was turned off, it was running too slow.",
                            'advanced-dynamic-pricing-for-woocommerce'), $ruleEditUrl,
                        __("Edit rule", 'advanced-dynamic-pricing-for-woocommerce'));
                } else {
                    $noticeMessage .= sprintf($format, $disabledCountExclusive,
                        __("exclusive rules were turned off, it were running too slow.",
                            'advanced-dynamic-pricing-for-woocommerce'), $ruleEditUrl,
                        __("Edit rule", 'advanced-dynamic-pricing-for-woocommerce'));
                }
                $noticeMessage .= '</div>';
                // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                echo $noticeMessage;
            }
        }
    }

    public function notifyCouponsDisabled()
    {
        if ( ! $this->context->isWoocommerceCouponsEnabled()) {
            $noticeMessage = '<div class="notice notice-warning is-dismissible"><p>';
            $noticeMessage .= __(
                "Please enable coupons (cart adjustments won't work)",
                'advanced-dynamic-pricing-for-woocommerce'
            );
            $noticeMessage .= '</p></div>';
            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo $noticeMessage;
        }
    }

    public function dismissPersistenceRulesNotice()
    {
        update_option(self::dismissedPersistenceRulesNoticeOption, true);
    }

    public function isDismissedPersistenceRulesNotice()
    {
        $compare        = new CompareStrategy();
        $ruleRepository = new RuleRepository();

        return $compare->isStringBool(get_option(self::dismissedPersistenceRulesNoticeOption, false))
               || $this->context->getOption("support_persistence_rules")
               || $ruleRepository->getRulesCount() <= self::persistenceRulesNoticeThreshold;
    }

    public function removePersistenceRulesNotice()
    {
        delete_option(self::dismissedPersistenceRulesNoticeOption);
    }

    public function notifyAboutPersistenceRules()
    {
        //phpcs:ignore WordPress.Security.NonceVerification.Recommended
        if ($this->isDismissedPersistenceRulesNotice() || !(isset($_GET['page']) && $_GET['page'] == 'wdp_settings')) {
          return;
        }

        $ruleEditUrl = add_query_arg(
                           [
                               'page'                                 => AdminPage::SLUG,
                               AdminPage::TAB_REQUEST_KEY             => Options::getKey(),
                               'from_enable_persistence_rules_notice' => '1'
                           ],
                           admin_url('admin.php')
                       ) . "#section=rules";

        ?>
        <div class="notice notice-success is-dismissible">
            <p>
                <?php
                printf(
                    /* translators: Recommendation for enabling persistence rules */
                    esc_html__( 'You have more than %s rules. You need to ', 'advanced-dynamic-pricing-for-woocommerce')
                        .'<a href="%s">' .esc_html__('enable the "Product only" rules', 'advanced-dynamic-pricing-for-woocommerce').'</a>',
                    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    self::persistenceRulesNoticeThreshold, $ruleEditUrl);
                ?>
            </p>
        </div>
        <?php
    }

}
