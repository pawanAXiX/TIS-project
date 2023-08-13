// to make screen blurred when focused in search bar
const headerElement = document.getElementById("search-page-header");
const suggestionDiv = document.getElementById('suggestions_container');
const searchTitle = document.getElementById('sticky-div');
const pictureContainer = document.getElementById('picture-contain');
const infoContainer = document.getElementById('info-contain');
const feedExplore = document.getElementById('feed-explore-container');
const feedDo = document.getElementById('feed-do-container');
const feedStay = document.getElementById('feed-stay-container');
const feedEat = document.getElementById('feed-eat-container');
const feedSocialize = document.getElementById('feed-socialize-container');
const footerElement = document.getElementById('search-page-footer');

const blurElements = new Array(headerElement, searchTitle, pictureContainer, infoContainer, feedExplore, feedDo, feedStay, feedEat, feedSocialize, footerElement);

blurElements.forEach(function (blurElement) {
    blurElement.style.transition = "filter 0.2 ease";
})

//making a transition on scrolling
var movingText = document.getElementById('menu-title');

window.addEventListener('scroll', function () {
    var scrollPosition = window.scrollY;

    if (scrollPosition > 1000) { // Adjusting the scroll position threshold as desired
        movingText.classList.add('title-scrolled');
    } else {
        movingText.classList.remove('title-scrolled');
    }
});



var searchBar = document.getElementById('search');
var district_option = document.getElementById("district");
var destination_option = document.getElementById("destination");
var type_option = document.getElementById("type");
// for reset btn
function resetBtn() {
    district_option.options[0].selected = true;
    destination_option.options[0].selected = true;
    type_option.options[0].selected = true;
    load_search_result(searchBar.value);
}

//for search focus-in and focus-out
searchBar.addEventListener('focusin', function () {
    suggestionDiv.style.display = 'block';

    // adding the cancel icon if the search bar is focused
    search_cancel_btn.innerHTML = '<button class="icon-wrap" id="cancel-btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 492 492" xml:space="preserve"><path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/></svg></button>';

    blurElements.forEach(function (blurElement) {
        blurElement.style.filter = "blur(5px)";
        blurElement.style.pointerEvents = "none";
    })
});

function scrollContent(scrollAmount, action) {
    const scrollContainer = document.querySelector('#container-' + action);
    const scrollContent = document.querySelector('#content-' + action);
    const scrollPosition = scrollContainer.scrollLeft;
    const scrollStep = scrollContent.clientWidth / 3;

    scrollContainer.scrollBy({
        left: scrollStep * scrollAmount,
        behavior: 'smooth'
    });
}


const searchBtn = document.getElementById("search-btn");
const cancelBtn = document.getElementById("cancel-btn");

var search_cancel_btn = document.getElementById("search-cancel-btn");

search_cancel_btn.addEventListener('click', function (event) {

    var searchOrCancelBtn = search_cancel_btn.firstElementChild;


    if (searchOrCancelBtn.id === 'search-btn') {

        event.preventDefault();
        suggestionDiv.style.display = 'block';
        search_cancel_btn.innerHTML = '<button class="icon-wrap" id="cancel-btn"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 492 492" xml:space="preserve"><path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z"/></svg></button>';
        blurElements.forEach(function (blurElement) {
            blurElement.style.filter = "blur(5px)";
            blurElement.style.pointerEvents = "none";
        })

    } else if (searchOrCancelBtn.id === 'cancel-btn') {

        var searchBar = document.getElementById('search');
        event.preventDefault();
        suggestionDiv.style.display = 'none';
        search_cancel_btn.innerHTML = '<button class="icon-wrap" id="search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></button>';
        searchBar.value = "";
        load_search_result("");

        blurElements.forEach(function (blurElement) {
            blurElement.style.filter = "none";
            blurElement.style.pointerEvents = "all";
        })
    }
});


var search_button = document.getElementById("search-button");

search_button.addEventListener("click", function (event) {
    event.preventDefault();
    search_query = searchBar.value;
    district_selected = district_option.value;
    destination_selected = destination_option.value;
    type_selected = type_option.value;
    if (type_selected == "Types") {
        type_selected = "";
    }

    console.log(search_query, district_selected, destination_selected, type_selected);
    if (district_selected == "" && destination_selected == "" && type_selected == "" && search_query == "") {//
        searchBar.placeholder ="Plz select filters or enter some queries first... ";
    }
    else if (district_selected != "" && destination_selected == "" && type_selected == "" && search_query == "") {//
        window.location.href = "district_page.php?district=" + district_selected;
    }
    else if (district_selected == "" && destination_selected != "" && type_selected == "" && search_query == "") {//
        window.location.href = "attractions_list.php?destination=" + destination_selected;
    }
    else if (district_selected == "" && destination_selected == "" && type_selected == "" && search_query != "") {//
        window.location.href = "attractions_list.php?query=" + search_query;
    }
    else if (district_selected != "" && destination_selected != "" && type_selected == "" && search_query == "") {//
        window.location.href = "attractions_list.php?district=" + district_selected + "&destination=" + destination_selected;
    }
    else if (district_selected != "" && destination_selected == "" && type_selected == "" && search_query != "") {
        window.location.href = "attractions_list.php?district=" + district_selected + "&query=" + search_query;
    }
    else if (district_selected == "" && destination_selected != "" && type_selected != "" && search_query == "") {
        window.location.href = "attractions_list.php?destination=" + destination_selected + "&type=" + type_selected;
    }
    else if (district_selected == "" && destination_selected != "" && type_selected == "" && search_query != "") {
        window.location.href = "attractions_list.php?destination=" + destination_selected + "&query=" + search_query;
    }
    else if (district_selected != "" && destination_selected != "" && type_selected != "" && search_query == "") {
        window.location.href = "attractions_list.php?district=" + district_selected + "&destination=" + destination_selected + "&type=" + type_selected;
    }
    else if (district_selected != "" && destination_selected != "" && type_selected != "" && search_query == "") {
        window.location.href = "attractions_list.php?district=" + district_selected + "&destination=" + destination_selected + "&type=" + type_selected;
    }
    else if (district_selected != "" && destination_selected != "" && type_selected == "" && search_query != "") {
        window.location.href = "attractions_list.php?district=" + district_selected + "&destination=" + destination_selected + "&query=" + search_query;
    }
    else if (district_selected == "" && destination_selected != "" && type_selected != "" && search_query != "") {
        window.location.href = "attractions_list.php?destination=" + destination_selected + "&type=" + type_selected + "&query=" + search_query;
    }
    else if (district_selected != "" && destination_selected != "" && type_selected != "" && search_query != "") {
        window.location.href = "attractions_list.php?district=" + district_selected + "&destination=" + destination_selected + "&type=" + type_selected + "&query=" + search_query;
    }
});