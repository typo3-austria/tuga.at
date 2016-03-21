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


	$('.m-location--text').click(function () {
		$(this).selectText();
	});


	// clipboard.js activation
	var clipboard = new Clipboard('.btn-js-clipboard');

	clipboard.on('success', function(e) {
		//console.log(e);
		//console.log(e.trigger);
		$(e.trigger)
			.tooltip({
				title: TYPO3.lang['frontend.copied'][0]['target'],
				placement: 'bottom'
			})
			.tooltip('show');
	});
	clipboard.on('error', function(e) {
		//console.log(e);
		$(e.trigger)
			.tooltip({
			title: fallbackMessage(e.action),
			placement: 'bottom'
			})
			.tooltip('show');
	});


	// Main Nav
	$('.hamburger-wrap').click(function(){
		$('.hamburger', this).toggleClass('open');
	});








	// Simplistic detection, do not use it in production
	function fallbackMessage(action) {
		var actionMsg = '';
		var actionKey = (action === 'cut' ? 'X' : 'C');

		if(/iPhone|iPad/i.test(navigator.userAgent)) {
			actionMsg = TYPO3.lang['frontend.copyfailure'][0]['target'];
		}
		else if (/Mac/i.test(navigator.userAgent)) {
			actionMsg = 'Drücke Cmd-' + actionKey + ' to ' + action;
		}
		else {
			actionMsg = 'Drücke Strg-' + actionKey + ' to ' + action;
		}

		return actionMsg;
	}

}());



jQuery.fn.selectText = function(){
	this.find('input').each(function() {
		if($(this).prev().length == 0 || !$(this).prev().hasClass('p_copy')) {
			$('<p class="p_copy" style="position: absolute; z-index: -1;"></p>').insertBefore($(this));
		}
		$(this).prev().html($(this).val());
	});
	var doc = document;
	var element = this[0];
	console.log(this, element);
	if (doc.body.createTextRange) {
		var range = document.body.createTextRange();
		range.moveToElementText(element);
		range.select();
	} else if (window.getSelection) {
		var selection = window.getSelection();
		var range = document.createRange();
		range.selectNodeContents(element);
		selection.removeAllRanges();
		selection.addRange(range);
	}
};
