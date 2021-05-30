/** Copyright 2020 Munerix. All rights reserved. */

$(function() {
	"use strict";
	var $container = $('.intro-container');
	var $trans = $('.transition-container');
	var $curtain = $('.intro-curtain');
	var $hcp = $('.hero-catchphrase');
	var $hcp_h1 = $hcp.children('h1');
	var $hcp_p = $hcp.children('p');
	var $skp = $('.skewhero-parallax');
	var $skm = $('.skewhero-mask');
	var $hi = $('.hero-image');
	var $hc = $('.hero-container');
	var $winwidth = $(window).width();

	$(window).on('scroll', function () {
		calcParallax();
	});

	$(window).resize(function() {
		$winwidth = $(window).width();
		calcParallax();
	});
	
	if ((window.location.href.indexOf("#services") > -1) || !$('div').hasClass('hero-container')) {
		$container.remove();
		$trans.css({'height':'0%'});
		return;
	} else {
		$hcp_h1.css({'opacity':'0', 'transform':'translateY(60px)'});
		$hcp_p.css({'opacity':'0', 'transform':'translateY(40px)'});
		$trans.css({'height':'0%'});
		if ($winwidth > 740) {
			$hc.css({'height':'0%'});
			$hi.css({'transform':'translateY(-100px)'});
			
			if ($winwidth > 962) {
				$('body').css({'overflow':'hidden', 'max-height':'100vh'});
				$skp.css({'transform':'translateX(7vh) translateY(100px)'});
				$curtain.css({'transform':'skew(24deg) translateX(-30vw) translateY(0%)'});
				
				$curtain.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
					$container.css({'background':'rgba(0,0,0,0)'});
					$curtain.css({'transition':'all 1s cubic-bezier(.23,1,.32,1), transition 0s'});
					$curtain.css({'width':'45vw', 'transform':'skew(24deg) translateX(4vh) translateY(0%)'});
					window.setTimeout(function () {
						$curtain.css({'transition':'transform 1s cubic-bezier(.86,0,.07,1)'});
					}, 800);
					
					$curtain.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
						$curtain.css({'transform':'skew(24deg) translateX(4vh) translateY(-100%)'});
						$skp.css({'transition':'transform 0.8s ease'});
						$hi.css({'transition':'transform 0.9s ease'});
						
						$hc.css({'height':'95%'});
						$skp.css({'transform':'translateX(4vh) translateY(0px)'});
						$hi.css({'transform':'translateY(0px)'});
						introCatchphrase(450);
					
						$hc.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
							$curtain.css({'will-change':'unset'});
							$container.remove();
							$('body').removeAttr('style');
						});
					});
				});
			} else {
				$container.remove();
				$(window).on('beforeunload', function() {
					$(window).scrollTop(0);
				});
				window.setTimeout(function () {
					$hc.css({'transition':'height 1s cubic-bezier(.86,0,.07,1)'});
					$hi.css({'transition':'transform 0.9s ease'});
					$hc.css({'height':'100%'});
					$hi.css({'transform':'translateY(0px)'});
					introCatchphrase(450);
				}, 50);
			}
		} else {
			$container.remove();
			$trans.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
				introCatchphrase(100);
			});
		}
		
		$hcp_p.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
			$skp.removeAttr('style');
			$hc.removeAttr('style');
			$hi.removeAttr('style');
			$hcp_h1.removeAttr('style');
			$hcp_p.removeAttr('style');
		});
	}
	
	function introCatchphrase($delay) {
		$hcp_h1.css({'transition':'all 0.5s ease'});
		$hcp_p.css({'transition':'all 0.5s ease'});
		window.setTimeout(function () {
			$hcp_h1.css({'opacity':'1', 'transform':'translateY(0px)'});
			window.setTimeout(function () {
				$hcp_p.css({'opacity':'1', 'transform':'translateY(0px)'});
			}, 200);
		}, $delay);
	}

	function calcParallax() {
		if ($winwidth > 740) {
			if ($('.hero-container')[0].getBoundingClientRect().bottom > 0) {
				var $scroll = $(document).scrollTop();
				var $halfpercent = 0.00418 * $scroll;
				var $offsetY = (-80 * $halfpercent) + $scroll;
				
				if ($winwidth > 962) {
					var $offsetX = (-0.01 * $scroll) + 4;
					$skm.css({'transform':'skew(24deg) translateX(' + $offsetX + 'vh) translateY(-' + $halfpercent + '%)'});
					$skp.css({'transform':'translateX(' + $offsetX + 'vh) translateY(' + $offsetY + 'px)'});
				} else {
					$skm.removeAttr('style');
					$skp.removeAttr('style');
				}
				$hi.css({'transform':'translateY(' + $offsetY + 'px)'});
				$hcp.css({'transform':'translateY(' + (4 * $halfpercent) + 'vh)'});
			}
		} else {
			$hi.removeAttr('style');
			$hcp.removeAttr('style');
		}
	}
});