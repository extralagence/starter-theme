jQuery(function($) {

	console.log(contact_location);

	google.maps.visualRefresh = true;

	var $mapContainerBig = $('#contact-map-big');

	var location = contact_location,
		latitude = location.latitude,
		longitude = location.longitude,
		latlon = new google.maps.LatLng(latitude, longitude);

	/***********************
	 *
	 *
	 * MAP
	 *
	 *
	 ***********************/
	var mapOptionsBig = {
		center: latlon,
		zoom: 12,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var mapBig = new google.maps.Map($mapContainerBig[0], mapOptionsBig);

	/***********************
	 *
	 *
	 * MARKER
	 *
	 *
	 ***********************/
	var markerLatLng = new google.maps.LatLng(latitude, longitude);
	var markerBig = new google.maps.Marker({
		position: markerLatLng,
		map: mapBig,
		draggable:false
	});


	//
	// RESIZE
	//
	function resizeMap() {
		google.maps.event.trigger(mapBig, "resize");
		mapBig.setCenter(latlon);
	}

	var $window = $(window);
	$('.map-link').fancybox({
		autoSize  : false,
		width     : $window.width() * 0.8,
		height    : $window.height() * 0.8,
		beforeShow: resizeMap,
		afterShow : resizeMap,
		onUpdate  : resizeMap
	});
});