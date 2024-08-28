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
			styles: [
				{
					"featureType": "landscape.natural",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#9FCC79"
						},
						{
							"lightness": "43"
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
							"color": "#9FCC79"
						},
						{
							"lightness": "46"
						}
					]
				},
				{
					"featureType": "poi.business",
					"elementType": "labels",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "poi.school",
					"elementType": "labels",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "geometry",
					"stylers": [
						{
							"lightness": 100
						},
						{
							"visibility": "simplified"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "labels",
					"stylers": [
						{
							"visibility": "simplified"
						},
						{
							"color": "#757575"
						}
					]
				},
				{
					"featureType": "transit.line",
					"elementType": "geometry",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"lightness": 700
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "all",
					"stylers": [
						{
							"color": "#66CC99"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#9FCC79"
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
