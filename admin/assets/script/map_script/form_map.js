// Initialize the map
var latitude = 27.622790024748085; // Replace with your desired latitude
var longitude = 84.50981919998308; // Replace with your desired longitude

var inputLatitude = document.getElementById("dest-latitude");
var inputLongitude = document.getElementById("dest-longitude");

var map = L.map('form_map').setView([latitude, longitude], 7);


// Add the tile layer (OpenStreetMap)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(map);

// Add a draggable marker
var marker = L.marker([latitude, longitude], { draggable: true }).addTo(map);

// Event listener for marker dragend
marker.on('dragend', function(event) {
    var marker = event.target;
    var position = marker.getLatLng();
    var lat = position.lat;
    var lng = position.lng;

    console.log(lat);
    console.log(lng);

    lat.toFixed(5);


    inputLatitude.value=parseFloat(lat.toFixed(5));
    inputLongitude.value=parseFloat(lng.toFixed(5));

    });
    