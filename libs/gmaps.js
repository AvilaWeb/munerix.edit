/** Copyright 2019 Munerix. All rights reserved. */

function initMunerixMap() {
	var Munerix = {lat: 50.910642, lng: 3.277277};
	var checkVisible = setInterval(function () { addMarker() }, 100);
	var $location = document.getElementById('location');
	
	var map = new google.maps.Map($location, {
		center: Munerix,
		zoom: 15,
		disableDefaultUI: true,
		styles: [{
			"featureType": "poi",
			"stylers": [{ "visibility": "off" }]
		}]
	});
	
	var image = {
		url: "https://munerix.be/img/gmaps-marker.svg",
		anchor: new google.maps.Point(15,35),
		scaledSize: new google.maps.Size(30,40)
	}
	
	function addMarker() {
		if (inViewport($location, 45)) {
			clearInterval(checkVisible);
			
			var marker = new google.maps.Marker({
				map: map,
				position: Munerix,
				icon: image,
				animation: google.maps.Animation.DROP
			});
		}
	}
	
	var traffic = new google.maps.TrafficLayer();
	traffic.setMap(map);
		
}

function inViewport(el, percentVisible) {
	"use strict";
	var rect = el.getBoundingClientRect(), windowHeight = (window.innerHeight || document.documentElement.clientHeight);
	return !( Math.floor(100 - (((rect.top >= 0 ? 0 : rect.top) / +-(rect.height / 1)) * 100)) < percentVisible || Math.floor(100 - ((rect.bottom - windowHeight) / rect.height) * 100) < percentVisible);
}