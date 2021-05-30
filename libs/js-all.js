/** Copyright 2019 Munerix. All rights reserved. */

function removeMenu() {
	"use strict";
	if ($(".menu-toggle").hasClass("active")) {
		toggleMenu();
	}
}

function toggleMenu() {
	"use strict";
	$(".menu-toggle").toggleClass("active");
	$("#menu").toggleClass("active");
	$("#menu-shade").toggleClass("active");
}

$('a').click(function(e) {
	"use strict";
	removeMenu();
	if ($(this).attr('target') === undefined) {
		e.preventDefault();
		var $link = $(this).attr('href');
		if ($link.split("#")[0].length > 0) {
			var $trans = $('.transition-container');
			$trans.css({'height':'100vh'});
			$trans.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
				location.href = $link;
			});
		} else {
			smoothScroll($link);
		}
	}
});

function anchorScroll(e) {
	"use strict";
	event.preventDefault();
	smoothScroll($(e).attr('href'));
}

function smoothScroll($link) {
	"use strict";
	$('html, body').stop().animate({
		scrollTop: $('#' + $link.split("#")[1]).offset().top
	}, 700, 'easeInOutExpo');
}