// Getting a collection of elements with the class name
var feed_details_div = document.getElementsByClassName("feed-details");
var feed_details_div_array = Array.from(feed_details_div);

// Remove each element
feed_details_div_array.forEach(function (feed_details_element) {
    feed_details_element.remove();
});


// Getting a collection of elements with the class name
var feed_content_div = document.getElementsByClassName("feed-contents");
var feed_content_div_array = Array.from(feed_content_div);

// Remove each element
feed_content_div_array.forEach(function (feed_content_element) {
    feed_content_element.style.display = "block";

});
