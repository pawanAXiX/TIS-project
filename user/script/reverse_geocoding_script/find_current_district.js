var nearby_search = document.getElementById('location-link');
var district = "";
var address = "";
var latitude = "";
var longitude = "";
nearby_search.addEventListener('click', function (event) {

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(
            position => {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;

                //nominate API 
                const url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        address = data.address;
                        district = address.county;
                        latitude = data.lat;
                        longitude = data.lon;

                        //setting the district value in href
                        nearby_search.setAttribute('href', "district_page.php?district=" + district);

                        // Converting the coordinates in form data
                        var locationForm = new FormData();
                        locationForm.append("latitude", latitude);
                        locationForm.append("longitude", longitude);
                        locationForm.append("district", district);
                        console.log(locationForm.get("latitude"), locationForm.get("longitude"), locationForm.get("district"));

                        // Send an AJAX request to the PHP script : search.php
                        const xhr = new XMLHttpRequest();
                        console.log(window.location.href);
                        xhr.open('POST', './ajax_processing/location_cookie_set.php', true);
                        xhr.onreadystatechange = function () {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                console.log('Data sent for cookie set!');
                                console.log(xhr.responseText);
                            }
                        };
                        xhr.send(locationForm);
                    })
                    .catch(error => {
                        console.log('Error:', error);
                        // Handle the error accordingly
                    });
            },
            error => {
                console.log('Geolocation Error:', error.message);
                // Handle the geolocation error accordingly
            }
        );

    } else {
        console.log('Geolocation is not supported by this browser.');
        // Handle the case where Geolocation API is not available
    }




});