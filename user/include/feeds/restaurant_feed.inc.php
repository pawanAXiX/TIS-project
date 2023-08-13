<?php
$district = "";
$restaurant_selected = "";

// for destination.php
if (isset($_GET['district']) && isset($_GET['destination']) && isset($_GET['dest_id'])) {
    $district = $_GET['district'];
    $destination_id = $_GET['dest_id'];
    $restaurant_query = "select * from tbl_restaurant where r_district='" . $district . "' AND r_id!='" . $destination_id . "';";
    $restaurant_result = $con->query($restaurant_query);
}
// for district_page.php
elseif (isset($_GET['district'])) {
    $district = $_GET['district'];
    $restaurant_query = "select * from tbl_restaurant where r_district='" . $district . "';";
    $restaurant_result = $con->query($restaurant_query);
}
else {
    $restaurant_query = "select * from tbl_restaurant;";
    $restaurant_result = $con->query($restaurant_query);
}
?>
<div class="feed-container" id="feed-eat-container">


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

                    <a href="<?php echo $restaurant_url; ?>" target="_blank">
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

                                    <!-- php code here -->
                                    <?php while ($restaurant_data_row = $restaurant_result->fetch_assoc()) { ?>
                                        <!-- php code here -->
                                        <li class="feed-content-li" id="<?php echo $restaurant_data_row['r_id']; ?>">
                                            <div class="feed-content-box">
                                                <a href="./destination.php?district=<?php echo $restaurant_data_row['r_district']; ?>&destination=restaurant&dest_id=<?php echo $restaurant_data_row['r_id']; ?>" target="_blank">
                                                    <div class="image-container-box">
                                                        <div class="image-container">
                                                            <div class="image-div">
                                                                <img src="<?php echo $restaurant_data_row['r_image']; ?>"
                                                                    alt="This is <?php echo $restaurant_data_row['r_name']; ?>'s picture.">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="feeds-bottom-details">
                                                        <div class="destination-name-container">
                                                            <div class="destination-name">
                                                                <?php echo $restaurant_data_row['r_name']; ?>
                                                            </div>
                                                        </div>

                                                        <div class="destination-rating-review-container">
                                                            <div class="destination-rating">
                                                            <?php star_ratings($restaurant_data_row['r_rating'])?>
                                                                <span class="destination-review-container">
                                                                    <span class="destination-review">
                                                                        <?php echo $restaurant_data_row['r_num_reviews']; ?>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="destination-type">
                                                            <?php echo $restaurant_data_row['r_type']; ?>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="rating-icon-circle">
                                                    <button class="like-btn" data-liked="no"
                                                    data-destination-type="restaurant"
                                                        data-destination-id="<?php echo $restaurant_data_row['r_id'] ?>">
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

                                        <!-- php code here -->
                                    <?php } ?>
                                    <!-- php code here -->
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

</div>