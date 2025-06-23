"use strict";

jQuery( function ($) {

	var plugin_redirect = function plugin_redirect(result) {
		location = eternal_vars.eternal_starter_sites_page;
	};

	$( document ).on('click', '.eternal-admin-notice .notice-dismiss', function () {
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'eternal_admin_notice_dismiss',
				'eternal-nonce-name': eternal_vars.eternal_nonce
			}
		});
	});

	$( document ).on('click', '.eternal-activate-plugin', function () {
		$( this ).html('<span class="dashicons dashicons-update"></span> ' + eternal_text_strings.eternal_string_activating).addClass('button-loading');
		wp.apiFetch( {
			path: '/wp/v2/plugins/starter-sites/starter-sites',
			method: 'POST',
			data: {
				'status': 'active'
			}
		}).then( function (result) {
			plugin_redirect(result);
		})["catch"]( function () {
			plugin_redirect({});
		});
	});

	$( document ).on('click', '.eternal-install-plugin', function () {
		$( this ).html('<span class="dashicons dashicons-update"></span> ' + eternal_text_strings.eternal_string_installing).addClass('button-loading');
		wp.apiFetch( {
			path: '/wp/v2/plugins',
			method: 'POST',
			data: {
				'slug': 'starter-sites',
				'status': 'active'
			}
		}).then( function (result) {
			plugin_redirect(result);
		})["catch"]( function () {
			plugin_redirect({});
		});
	});

	const galleryItem = $('.is-gallery-item');
	const openClasses = $('.eternal-page-wrapper, .eternal-page-content, #wpfooter');
	$( '.eternal-page-gallery-items .gallery-item' ).each( function() {
		var thisGalleryID = $(this).data('gallery-id');
		$(this).on('click', function() {
			var galleryClass = '.gallery-id-' + thisGalleryID;
			openClasses.removeClass('has-open-gallery');
			$(galleryClass).addClass('is-open');
			openClasses.addClass('has-open-gallery');
		});
	});

	$('button.gallery-close', galleryItem).on('click', function() {
		galleryItem.removeClass('is-open');
		openClasses.removeClass('has-open-gallery');
	});

	galleryItem.each( function() {
		var thisGalleryID = $(this).data('gallery-id');
		var prevGalleryID = $(this).prev().data('gallery-id');
		var nextGalleryID = $(this).next().data('gallery-id');
		if (prevGalleryID == null) {
			prevGalleryID = galleryItem.last().data('gallery-id');
		}
		if (nextGalleryID == null) {
			nextGalleryID = galleryItem.first().data('gallery-id');
		}
		$('button.gallery-prev', this).on('click', function() {
			var galleryClass = '.is-gallery-item.gallery-id-' + thisGalleryID;
			$(galleryClass).removeClass('is-open');
			var prevGalleryClass = '.is-gallery-item.gallery-id-' + prevGalleryID;
			$(prevGalleryClass).addClass('is-open');
		});
		$('button.gallery-next', this).on('click', function() {
			var galleryClass = '.is-gallery-item.gallery-id-' + thisGalleryID;
			$(galleryClass).removeClass('is-open');
			var nextGalleryClass = '.is-gallery-item.gallery-id-' + nextGalleryID;
			$(nextGalleryClass).addClass('is-open');
		});
	});

});