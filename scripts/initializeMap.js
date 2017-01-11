function initMap(){
	var uluru = {lat: 44.807982, lng: -93.305849};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: uluru
	});

	var marker = new google.maps.Marker({
	position: uluru,
	map: map
	});
}