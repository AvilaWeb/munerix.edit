/** Copyright 2019 Munerix. All rights reserved. */

$(function() {
	"use strict";
	var $trans = $('.transition-container');
	/**var $h = $('.header');
	var $h_h1 = $h.children('h1');
	var $hi = $('.header-image');
	var $hc = $('.header-container');
	var $winwidth = $(window).width();

	$(window).resize(function() {
		$winwidth = $(window).width();
	});
	
	$h_h1.css({'opacity':'0', 'transform':'translateY(45px)'});*/
	$trans.css({'height':'0%'});
	/**if ($winwidth > 740) {
		$hc.css({'height':'0%'});
		$hi.css({'transform':'translateY(-100px)'});
		
		$(window).on('beforeunload', function() {
			$(window).scrollTop(0);
		});
		window.setTimeout(function () {
			$hc.css({'transition':'height 1s cubic-bezier(.86,0,.07,1)'});
			$hi.css({'transition':'transform 0.9s ease'});
			$hc.css({'height':'100%'});
			$hi.css({'transform':'translateY(0px)'});
			introCatchphrase(450);
		}, 250);
	} else {
		$trans.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
			introCatchphrase(100);
		});
	}
	
	$h_h1.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
		$h.removeAttr('style');
		$h_h1.removeAttr('style');
		$hi.removeAttr('style');
		$hc.removeAttr('style');
	});
	
	function introCatchphrase($delay) {
		$h_h1.css({'transition':'all 0.5s ease'});
		window.setTimeout(function () {
			$h_h1.css({'opacity':'1', 'transform':'translateY(0px)'});
		}, $delay);
	}*/
});