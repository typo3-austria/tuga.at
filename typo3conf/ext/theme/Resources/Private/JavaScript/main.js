/*jslint browser: true, nomen: false, devel: true, white: true */
/*global $, jQuery, Modernizr */

(function () {
	"use strict";

	// check for touch device (minimal)
	var is_touch_device = 'ontouchstart' in document.documentElement;

	// bootstrap tooltips for all except links
	$(function () {
		$(':not(a)[data-toggle="tooltip"]').tooltip()
	});

	// bootstrap tooltips for links on non touch devices
	if (!is_touch_device) {
		$('a[data-toggle="tooltip"]').tooltip({

		});
	}


	// Activate Gmap on click
	$('.maps').click(function () {
		$('iframe', this).css("pointer-events", "auto");
	});

}());
