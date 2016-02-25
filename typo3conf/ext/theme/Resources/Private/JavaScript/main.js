/*jslint browser: true, nomen: false, devel: true, white: true */
/*global $, jQuery, Modernizr */

(function () {
	"use strict";

	// bootstrap tooltips
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})


	// Activate Gmap on click
	$('.maps').click(function () {
		$('iframe', this).css("pointer-events", "auto");
	});

}());
