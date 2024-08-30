class GMap {
	constructor() {
		document.querySelectorAll(".acf-map").forEach(el => {
			this.new_map(el)
		});
	}

	new_map($el) {
		const $markers = $el.querySelectorAll(".marker");

		const map = new google.maps.Map($el, {
			zoom: 16,
			disableDefaultUI: true,
			zoomControl: false,
			center: new google.maps.LatLng(0, 0),
			styles: 
			[
				{
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#d3d3d3"
						}
					]
				},
				{
					"featureType": "transit",
					"stylers": [
						{
							"color": "#808080"
						},
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#b3b3b3"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#ffffff"
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#ffffff"
						},
						{
							"weight": 1.8
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#d7d7d7"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#ebebeb"
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#a7a7a7"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#ffffff"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#ffffff"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#efefef"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#696969"
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#737373"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "labels",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#d6d6d6"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{},
				{
					"featureType": "poi",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#dadada"
						}
					]
				}
			]
		});

		
		// add markers
		map.markers = [];
		$markers.forEach(x => this.add_marker(x, map));

		// center map
		this.center_map(map);
	} 

	add_marker($marker, map) {
		const latlng = new google.maps.LatLng($marker.getAttribute("data-lat"), $marker.getAttribute("data-lng"));
		const image = `${ mainSiteData.theme_uri }/assets/images/map-marker.png`

		const marker = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: image
		});

		map.markers.push(marker);

		// if marker contains HTML, add it to an infoWindow
		if ($marker.innerHTML) {
			// create info window
			const infowindow = new google.maps.InfoWindow({
				content: $marker.innerHTML
			});

			// show info window when marker is clicked
			google.maps.event.addListener(marker, "click", function () {
				infowindow.open(map, marker)
			});
		}
	}

	center_map(map) {
		const bounds = new google.maps.LatLngBounds();

		// loop through all markers and create bounds
		map.markers.forEach(function (marker) {
			const latlng = new google.maps.LatLng(marker.position.lat(), marker.position.lng());

			bounds.extend(latlng);
		})

		// only 1 marker?
		if (map.markers.length == 1) {

			// set center of map
			map.setCenter(bounds.getCenter());
			map.setZoom(16.5);
		} else {

			// fit to bounds
			map.fitBounds(bounds);
		}
	}
}

export default GMap
