<?php

// session_start();
// if(!isset($_SESSION['email'])){
//     $_SESSION['Signed'] = "Please Login First";
//     header('location:login.php');
// }
//  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>District Page</title>
    <link rel="stylesheet" href="styles/header_style.css">
    <link rel="stylesheet" href="styles/footer_style.css">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="styles/district_page_style.css">
    <!-- <script src="https://kit.fontawesome.com/ed931f650e.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <header>
        <?php include "include/header.inc.php"; ?>
    </header>

    <main>

        <div class="container" id="sticky-div">

            <div class="title" id="menu-title">
                <i class="title-text" id="discover">Discover</i>,&nbsp;
                <i class="title-text" id="explore">Explore</i>,&nbsp;
                <i class="title-text" id="experience">Experience</i>&nbsp;!!!
            </div>
            <span>

                <div class="menu">
                    <div class="menu-container">
                        <div class="menu-box">
                            <a href="" class="menu-content">
                                <span class="name">Attractions/Places</span>
                                <span class="blank"></span>
                                <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        width="24px"
                                        height="24px"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                    </svg></span>
                            </a>
                        </div>
                        <div class="menu-box">
                            <a href="" class="menu-content">
                                <span class="name">Accommodation</span>
                                <span class="blank"></span>
                                <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        width="24px"
                                        viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                                    </svg></span>
                            </a>
                        </div>
                        <div class="menu-box">
                            <a href="" class="menu-content">
                                <span class="name">Restaurants</span>
                                <span class="blank"></span>
                                <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        width="24px"
                                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
                                    </svg></span>
                            </a>
                        </div>
                        <div class="menu-box">
                            <a href="" class="menu-content">
                                <span class="name">cafes</span>
                                <span class="blank"></span>
                                <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                        width="24px"
                                        viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M96 64c0-17.7 14.3-32 32-32H448h64c70.7 0 128 57.3 128 128s-57.3 128-128 128H480c0 53-43 96-96 96H192c-53 0-96-43-96-96V64zM480 224h32c35.3 0 64-28.7 64-64s-28.7-64-64-64H480V224zM32 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                    </svg></span>
                            </a>
                        </div>


                        <div class="menu-box">
                            <div class="menu-position">
                                <button href="" class="menu-content" onclick="javascript:toggleMenu();">
                                    <span class="name" id="more-btn" >More</span>
                                    <span class="blank"></span>
                                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512" width="24px" height="24px">
                                            <path
                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                        </svg></span>
                                </button>

                                <div class="more" data-menu="true" id="more-menu">
                                    <ul role="menu" tabindex="-1" class="more-ul">
                                        <li role="none">
                                            <a href="#" tabindex="-1" class="more-options" id="add-destination"
                                                role="menu-items">Add a Destination</a>
                                        </li>
                                        <li role="none">
                                            <a href="#" tabindex="-1" class="more-options" id="add-feedback"
                                                role="menu-items">Give us Feedbacks</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </span>
        </div>


        <div class="picture-container">
            <div class="picture-box">
                <img class="picture"
                    src="https://royalmt.com.np/news/wp-content/uploads/sites/3/2017/03/Kathmandu-Nepal.jpg"
                    alt="This is my picture" />
            </div>
        </div>


        <div class="info-container">
            <div class="info-grid">
                <div class="geo-desc">
                    <div class="info-about">About kathmandu</div>
                    <div class="info-desc">Nepal’s capital is surrounded by a valley full of historic sites, ancient
                        temples, shrines, and fascinating villages. Mingle with locals and animals amid Durbar Square’s
                        monuments, or join mountain trekkers in the bustling Thamel District. Explore shops for
                        exquisite work by local artisans—carpets and paper prints are specialties.</div>
                </div>
            </div>
        </div>


        <div class="feed-container">
            <div>
                <div class="feed-title">
                    <h2>Essential kathmandu</h2>
                </div>
            </div>

            <div class="feed-box" id="feed-do">
                <div class="feed-line">
                    <div class="feed-contents">
                        <!-- start of feed left side details -->
                        <div class="feed-details">

                            <div class="feed-details-title-box">
                                <div class="feed-details-title">
                                    <h3 class="feed-details-title-text">Do</h3>
                                </div>
                            </div>

                            <div class="feed-details-text">
                                Places to see, ways to wander, and signature experiences.
                            </div>

                            <a href="#">
                                <span>See all</span>
                            </a>
                        </div>
                        <!-- end of feed left side details -->

                        <!-- start of feed contents -->
                        <div class="feed-contents-blocks-container">
                            <div class="feed-block-container ">
                                <div class="arrow-keys-div left">
                                    <div class="arrow-keys"><!--no padding-->
                                        <span class="arrow-key-left">
                                            <button id="left-scroll-button" class=arrow onclick="scrollContent(-3,'do');"><svg
                                                    viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M10.304 3.506l-8.048 8.047a.644.644 0 000 .895l8.048 8.047a.624.624 0 00.883 0l.882-.883a.624.624 0 000-.883l-5.481-5.48h14.714a.625.625 0 00.623-.625v-1.248a.624.624 0 00-.623-.624H6.588l5.481-5.481a.624.624 0 000-.883l-.882-.883a.623.623 0 00-.883-.004c-.001.002-.002.003 0 .005z">
                                                    </path>
                                                </svg></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="feed-container-boxes">
                                    <div class="feed-contents-container" id="container-do">
                                        <ul class="feed-content-container" id="content-do">

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li end-of-scroll"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <!-- right key arrow -->
                                <div class="arrow-keys-div right">
                                    <div class="arrow-keys">
                                        <span class="arrow-key-right">
                                            <button id="right-scroll-button" class="arrow" onclick="scrollContent(3,'do');">
                                                <svg viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M13.696 3.502a.624.624 0 00-.884.004l-.882.883a.624.624 0 000 .883l5.481 5.481H2.698a.624.624 0 00-.623.624v1.248c0 .346.279.623.623.625h14.714l-5.481 5.48a.624.624 0 000 .883l.882.883c.245.244.64.244.883 0l8.049-8.047a.646.646 0 000-.895l-8.049-8.048v-.004z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feed-box" id="feed-stay">
                <div class="feed-line">
                    <div class="feed-contents">
                        <!-- start of feed left side details -->
                        <div class="feed-details">

                            <div class="feed-details-title-box">
                                <div class="feed-details-title">
                                    <h3 class="feed-details-title-text">Stay</h3>
                                </div>
                            </div>

                            <div class="feed-details-text">
                            A mix of the charming, modern, and tried and true.
                            </div>

                            <a href="#">
                                <span>See all</span>
                            </a>
                        </div>
                        <!-- end of feed left side details -->

                        <!-- start of feed contents -->
                        <div class="feed-contents-blocks-container">
                            <div class="feed-block-container ">
                                <div class="arrow-keys-div left">
                                    <div class="arrow-keys"><!--no padding-->
                                        <span class="arrow-key-left">
                                            <button id="left-scroll-button" class=arrow onclick="scrollContent(-3,'stay');"><svg
                                                    viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M10.304 3.506l-8.048 8.047a.644.644 0 000 .895l8.048 8.047a.624.624 0 00.883 0l.882-.883a.624.624 0 000-.883l-5.481-5.48h14.714a.625.625 0 00.623-.625v-1.248a.624.624 0 00-.623-.624H6.588l5.481-5.481a.624.624 0 000-.883l-.882-.883a.623.623 0 00-.883-.004c-.001.002-.002.003 0 .005z">
                                                    </path>
                                                </svg></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="feed-container-boxes">
                                    <div class="feed-contents-container" id="container-stay">
                                        <ul class="feed-content-container" id="content-stay">

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li end-of-scroll"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <!-- right key arrow -->
                                <div class="arrow-keys-div right">
                                    <div class="arrow-keys">
                                        <span class="arrow-key-right">
                                            <button id="right-scroll-button" class="arrow" onclick="scrollContent(3,'stay');">
                                                <svg viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M13.696 3.502a.624.624 0 00-.884.004l-.882.883a.624.624 0 000 .883l5.481 5.481H2.698a.624.624 0 00-.623.624v1.248c0 .346.279.623.623.625h14.714l-5.481 5.48a.624.624 0 000 .883l.882.883c.245.244.64.244.883 0l8.049-8.047a.646.646 0 000-.895l-8.049-8.048v-.004z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feed-box" id="feed-eat">
                <div class="feed-line">
                    <div class="feed-contents">
                        <!-- start of feed left side details -->
                        <div class="feed-details">

                            <div class="feed-details-title-box">
                                <div class="feed-details-title">
                                    <h3 class="feed-details-title-text">Eat</h3>
                                </div>
                            </div>

                            <div class="feed-details-text">
                            Can't-miss spots to dine, drink, and feast.
                            </div>

                            <a href="#">
                                <span>See all</span>
                            </a>
                        </div>
                        <!-- end of feed left side details -->

                        <!-- start of feed contents -->
                        <div class="feed-contents-blocks-container">
                            <div class="feed-block-container ">
                                <div class="arrow-keys-div left">
                                    <div class="arrow-keys"><!--no padding-->
                                        <span class="arrow-key-left">
                                            <button id="left-scroll-button" class=arrow onclick="scrollContent(-3,'eat');"><svg
                                                    viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M10.304 3.506l-8.048 8.047a.644.644 0 000 .895l8.048 8.047a.624.624 0 00.883 0l.882-.883a.624.624 0 000-.883l-5.481-5.48h14.714a.625.625 0 00.623-.625v-1.248a.624.624 0 00-.623-.624H6.588l5.481-5.481a.624.624 0 000-.883l-.882-.883a.623.623 0 00-.883-.004c-.001.002-.002.003 0 .005z">
                                                    </path>
                                                </svg></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="feed-container-boxes">
                                    <div class="feed-contents-container" id="container-eat">
                                        <ul class="feed-content-container" id="content-eat">

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li end-of-scroll"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <!-- right key arrow -->
                                <div class="arrow-keys-div right">
                                    <div class="arrow-keys">
                                        <span class="arrow-key-right">
                                            <button id="right-scroll-button" class="arrow" onclick="scrollContent(3,'eat');">
                                                <svg viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M13.696 3.502a.624.624 0 00-.884.004l-.882.883a.624.624 0 000 .883l5.481 5.481H2.698a.624.624 0 00-.623.624v1.248c0 .346.279.623.623.625h14.714l-5.481 5.48a.624.624 0 000 .883l.882.883c.245.244.64.244.883 0l8.049-8.047a.646.646 0 000-.895l-8.049-8.048v-.004z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feed-box" id="feed-socialize">
                <div class="feed-line">
                    <div class="feed-contents">
                        <!-- start of feed left side details -->
                        <div class="feed-details">

                            <div class="feed-details-title-box">
                                <div class="feed-details-title">
                                    <h3 class="feed-details-title-text">Socialize</h3>
                                </div>
                            </div>

                            <div class="feed-details-text">
                            Cozy ambiance for coffee, pastries, and meaningful conversations.
                            </div>

                            <a href="#">
                                <span>See all</span>
                            </a>
                        </div>
                        <!-- end of feed left side details -->

                        <!-- start of feed contents -->
                        <div class="feed-contents-blocks-container">
                            <div class="feed-block-container ">
                                <div class="arrow-keys-div left">
                                    <div class="arrow-keys"><!--no padding-->
                                        <span class="arrow-key-left">
                                            <button id="left-scroll-button" class=arrow onclick="scrollContent(-3,'socialize');"><svg
                                                    viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M10.304 3.506l-8.048 8.047a.644.644 0 000 .895l8.048 8.047a.624.624 0 00.883 0l.882-.883a.624.624 0 000-.883l-5.481-5.48h14.714a.625.625 0 00.623-.625v-1.248a.624.624 0 00-.623-.624H6.588l5.481-5.481a.624.624 0 000-.883l-.882-.883a.623.623 0 00-.883-.004c-.001.002-.002.003 0 .005z">
                                                    </path>
                                                </svg></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="feed-container-boxes">
                                    <div class="feed-contents-container" id="container-socialize">
                                        <ul class="feed-content-container" id="content-socialize">

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="feed-content-li end-of-scroll"><!--width to be aligned -->
                                                <div class="feed-content-box">
                                                    <a href="#">
                                                        <div class="image-container-box">
                                                            <div class="image-container">
                                                                <div class="image-div">
                                                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=400&h=300&s=1 1x,https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/b7/a5/60/thamel-boutique-hotel.jpg?w=800&h=600&s=1 2x"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="feeds-bottom-details">
                                                            <div class="destination-name-container">
                                                                <div class="destination-name">Thamel</div>
                                                            </div>

                                                            <div class="destination-rating-review-container">
                                                                <div class="destination-rating">
                                                                    <svg viewBox="0 0 128 24" width="68" height="12"
                                                                        aria-label="">
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform=""></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(26 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(52 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z"
                                                                            transform="translate(78 0)"></path>
                                                                        <path
                                                                            d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12zm0 2a9.983 9.983 0 019.995 10 10 10 0 01-10 10A10 10 0 012 12 10 10 0 0112 2z"
                                                                            transform="translate(104 0)"></path>
                                                                    </svg>
                                                                    <span class="destination-review-container">
                                                                        <span class="destination-review">5,728</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="destination-type">Adventurous</div>
                                                        </div>
                                                    </a>

                                                    <div class="rating-icon-circle">
                                                        <button>
                                                            <svg viewBox="0 0 24 24" width="24px"
                                                                height="24px"><!--haven't applied css-->
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>


                                <!-- right key arrow -->
                                <div class="arrow-keys-div right">
                                    <div class="arrow-keys">
                                        <span class="arrow-key-right">
                                            <button id="right-scroll-button" class="arrow" onclick="scrollContent(3,'socialize');">
                                                <svg viewBox="0 0 24 24" width="24px" height="24px">
                                                    <path
                                                        d="M13.696 3.502a.624.624 0 00-.884.004l-.882.883a.624.624 0 000 .883l5.481 5.481H2.698a.624.624 0 00-.623.624v1.248c0 .346.279.623.623.625h14.714l-5.481 5.48a.624.624 0 000 .883l.882.883c.245.244.64.244.883 0l8.049-8.047a.646.646 0 000-.895l-8.049-8.048v-.004z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </main>

    <footer>
        <?php include "include/footer.inc.php"; ?>
    </footer>


    <script>
        function toggleMenu() {
            var x = document.getElementById("more-menu");
            console.log(x.style.display);
            if (x.style.display === "none" || x.style.display === "") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function scrollContent(scrollAmount,action) {
            const scrollContainer = document.querySelector('#container-'+action);
            const scrollContent = document.querySelector('#content-'+action);
            const scrollPosition = scrollContainer.scrollLeft;
            const scrollStep = scrollContent.clientWidth / 3;

            scrollContainer.scrollBy({
                left: scrollStep * scrollAmount,
                behavior: 'smooth'
            });
        }

        // var stickyDiv = document.getElementById('sticky-div');
        // const copy_stickyDiv=stickyDiv;
        // console.log(copy_stickyDiv);
        // window.addEventListener('scroll', function() {
        // // var innerHTML_menu_title=document.querySelector('#sticky-div div');
        // // var innerHTML_menu=document.querySelector('#sticky-div span');

        // // var innerHTML_content=document.getElementById("div-menu");
        // // console.log(innerHTML_menu_title);
        // // console.log(typeof(innerHTML_menu_title));
        // // console.log(innerHTML_menu);
        // var scrollPosition = window.pageYOffset;
        //     // console.log(scrollPosition);
        // // Check the scroll position to determine the content change
        // if (scrollPosition >= 200) {
        //     stickyDiv.innerHTML = "New content";
        // } else {
        //     stickyDiv.innerHTML = copy_stickyDiv.innerHTML;
        //     // console.log(typeof(stickyDiv.innerHTML));
        // }
        // });

    </script>
</body>

</html>