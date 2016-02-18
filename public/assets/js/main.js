$(document).ready(function() {
console.log("DOM Chargé");
	/* This is basic - uses default settings */
	
	$("a#inline").fancybox({

		'transitionIn':	'elastic',
		'transitionOut':	'elastic',
		'speedIn':	600, 
		'speedOut':	200, 
		'overlayShow':	false
	});

		$("a#inline2").fancybox({
		
		'transitionIn':	'elastic',
		'transitionOut':	'elastic',
		'speedIn':	600, 
		'speedOut':	200, 
		'overlayShow':	false
	});
	



function initialiserGoogleMap(latitude, longitude) {
		var config = {
			'center': new google.maps.LatLng(latitude, longitude),
			'zoom': 5,
			'mapTypeId': google.maps.MapTypeId.ROADMAP
		};

		var mapElement = document.getElementById('map');

		var map = new google.maps.Map(mapElement, config);

		var marker = new google.maps.Marker({
			'position': {'lat': latitude, 'lng': longitude},
			'map': map,
			'title': 'Vous êtes là !'
		});
	}





});