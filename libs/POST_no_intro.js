/** Copyright 2020 Munerix. All rights reserved. */

$(function() {
	"use strict";
	var $trans = $('.transition-container');
	$trans.css({'transition':'all 0s', 'height':'0%'});
	window.setTimeout(function () {
		$trans.css({'transition':'all 0.4s cubic-bezier(.98,.14,.63,1), transition 0s'});
	}, 50);
});