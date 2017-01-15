$( document ).ready(function() {
	$('#bierbutton').click(function() {
	 geoFindMe();
	});
});


function geoFindMe() {
 var icon = $('<i/>', {
     class: 'fa fa-spinner fa-pulse fa-fw'
 });

 var span = $('<span/>', {
     id: 'loader',
     class: 'sr-only',
     text: 'Loading...'
 });

 $('#bierbutton').html(icon, span);
 $('#span').html(icon);

 if (!navigator.geolocation){
   alert("Geolocation werkt niet, https? of juiste API key?");
   return;
 }
 
 navigator.geolocation.getCurrentPosition(success);
}

function success(position) {
    var lat  = position.coords.latitude;
    var lon = position.coords.longitude;
    console.log(lat, lon);

     var icon = $('<i/>', {
     class: 'fa fa-check'
	 });


    $('#bierbutton').html("gevonden!");
    initMap(lat,lon);
    addToForm(lat, lon);
}	


function initMap(lat, lon) {
 var pos = {lat: lat, lng: lon};
 var map = new google.maps.Map(document.getElementById('map'), {
   zoom: 4,
   center: pos
 });

 var infoWindow = new google.maps.InfoWindow({map: map});

 infoWindow.setPosition(pos);
 infoWindow.setContent('Bier hier!');
 map.setCenter(pos);
 map.setZoom(17);

 var marker = new google.maps.Marker({
   position: pos,
   map: map
 });

 map.panTo(marker.position);
 infoWindow.setPosition(pos);
}

function addToForm(lat, lon){
	$('#latitude').val(lat);
	$('#longitude').val(lon);
}