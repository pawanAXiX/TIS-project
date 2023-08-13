<?php

session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['not_signed'] = "Plz, Log in first";
    header('location:login.php');
}

require "user/include/dbconn.inc.php";
//if only destination is selected
if (isset($_GET['destination']) && (!isset($_GET['district'])) && (!isset($_GET['type'])) && (!isset($_GET['query']))) { //
    $destination = $_GET['destination'];
    $first_char = substr($destination, 0, 1);
    $records = $con->query("SELECT * FROM tbl_" . $destination . ";");
    $no_of_rows = $records->num_rows;
    $title_text = "Popular " . ucfirst($destination) . "s in Nepal right now";
} // if only query is given 
else if (!isset($_GET['destination']) && !isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) { //
    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_GET["query"]);
    $records = $con->query("SELECT id, name, address, district, type, source_table
    FROM (
        SELECT d_name AS id, d_name AS name, 'Nepal' AS address, d_name AS district, d_type AS type, 'tbl_district' AS source_table
        FROM tbl_district
        UNION
        SELECT p_id AS id, p_name AS name, p_address AS address, p_district AS district, p_type AS type, 'tbl_place' AS source_table
        FROM tbl_place
        UNION
        SELECT a_id AS id, a_name AS name, a_address AS address, a_district AS district, a_type AS type, 'tbl_accommodation' AS source_table
        FROM tbl_accommodation
        UNION
        SELECT r_id AS id, r_name AS name, r_address AS address, r_district AS district, r_type AS type, 'tbl_restaurant' AS source_table
        FROM tbl_restaurant
        UNION
        SELECT c_id AS id, c_name AS name, c_address AS address, c_district AS district, c_type AS type, 'tbl_cafe' AS source_table
        FROM tbl_cafe
    ) AS combined_table
    WHERE name LIKE '" . $condition . "%'
    ORDER BY name ASC
    ;");
    $no_of_rows = $records->num_rows;
    $title_text = "Search Results for '" . $_GET['query'] . "'";
} // if destination and district is selected 
else if (isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && !isset($_GET['query'])) { //
    $destination = $_GET['destination'];
    $district = $_GET['district'];
    $first_char = substr($destination, 0, 1);
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "';");
    $no_of_rows = $records->num_rows;
    $title_text = "Popular " . ucfirst($destination) . "s in " . $district . " right now";
} //if district and query is given 
else if (!isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_GET["query"]);
    $district = $_GET['district'];
    $records = $con->query("SELECT id, name, address, district, type, source_table
    FROM (
        SELECT d_name AS id, d_name AS name, 'Nepal' AS address, d_name AS district, d_type AS type, 'tbl_district' AS source_table
        FROM tbl_district
        UNION
        SELECT p_id AS id, p_name AS name, p_address AS address, p_district AS district, p_type AS type, 'tbl_place' AS source_table
        FROM tbl_place
        UNION
        SELECT a_id AS id, a_name AS name, a_address AS address, a_district AS district, a_type AS type, 'tbl_accommodation' AS source_table
        FROM tbl_accommodation
        UNION
        SELECT r_id AS id, r_name AS name, r_address AS address, r_district AS district, r_type AS type, 'tbl_restaurant' AS source_table
        FROM tbl_restaurant
        UNION
        SELECT c_id AS id, c_name AS name, c_address AS address, c_district AS district, c_type AS type, 'tbl_cafe' AS source_table
        FROM tbl_cafe
    ) AS combined_table
    WHERE name LIKE '" . $condition . "%' AND district='" . $district . "'
    ORDER BY name ASC
    ;");
    $no_of_rows = $records->num_rows;
    $title_text = "Search Results for '" . $_GET['query'] . "'";
} //if destination and type is selected
else if (isset($_GET['destination']) && !isset($_GET['district']) && isset($_GET['type']) && !isset($_GET['query'])) {
    $destination = $_GET['destination'];
    $type = $_GET['type'];
    $first_char = substr($destination, 0, 1);
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_type='" . $type . "';");
    $no_of_rows = $records->num_rows;
    $title_text = "Popular " . ucfirst($destination) . "s";
} //if destination and query is selected
else if (isset($_GET['destination']) && !isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $destination = $_GET['destination'];
    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_GET["query"]);
    $first_char = substr($destination, 0, 1);
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_name ASC;");
    $no_of_rows = $records->num_rows;
    $title_text = "Search Results for '" . $_GET['query'] . "'";
} //if destination, district and type are selected
else if (isset($_GET['destination']) && isset($_GET['district']) && isset($_GET['type']) && !isset($_GET['query'])) {
    $destination = $_GET['destination'];
    $district = $_GET['district'];
    $type = $_GET['type'];
    $first_char = substr($destination, 0, 1);
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' AND " . $first_char . "_type='" . $type . "';");
    $no_of_rows = $records->num_rows;
    $title_text = "Popular " . ucfirst($destination) . "s in " . $district . " right now";
} //if district,destination and query is selected
else if (isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $destination = $_GET['destination'];
    $district = $_GET['district'];
    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_GET["query"]);
    $first_char = substr($destination, 0, 1);
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' AND " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_name ASC;");
    $no_of_rows = $records->num_rows;
    $title_text = "Popular " . ucfirst($destination) . "s in " . $district . " right now";
} //if destination,type and query is selected
else if (isset($_GET['destination']) && !isset($_GET['district']) && isset($_GET['type']) && isset($_GET['query'])) {
    $destination = $_GET['destination'];
    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_GET["query"]);
    $first_char = substr($destination, 0, 1);
    $type = $_GET["type"];
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_type='" . $type . "' AND " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_name ASC;");
    $no_of_rows = $records->num_rows;
    $title_text = "Search Results for '" . $_GET['query'] . "'";

} //if district,destination,type and query are selected
else if (isset($_GET['destination']) && isset($_GET['district']) && isset($_GET['type']) && isset($_GET['query'])) {
    $district = $_GET['district'];
    $destination = $_GET['destination'];
    $condition = preg_replace("/[^0-9A-Za-z\s_*><&$#@()=-]/", "", $_GET["query"]);
    $first_char = substr($destination, 0, 1);
    $type = $_GET["type"];
    $records = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' AND " . $first_char . "_type='" . $type . "' AND " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_name ASC;");
    $no_of_rows = $records->num_rows;
    $title_text = "Search Results for '" . $_GET['query'] . "' in " . $district . " district";

}

if ($no_of_rows == 0) {
    header("Location:search_error_page.php");
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$start = 0;
$contents_per_page = 12;
//calculating no of pages
$pages = ceil($no_of_rows / $contents_per_page);

//if the user clicks on a page no we set new start point
if (isset($_GET['page'])) {
    $page = $_GET['page'] - 1;
    $start = $page * $contents_per_page;
}

// if only destination is selected
if (isset($_GET['destination']) && (!isset($_GET['district'])) && (!isset($_GET['type'])) && (!isset($_GET['query']))) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " LIMIT " . $start . "," . $contents_per_page . ";");
}
if (!isset($_GET['destination']) && !isset($_GET['district']) && isset($_GET['type']) && !isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
}
// if district and destination both are selected
else if (!isset($_GET['destination']) && !isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT id, name, address, image, rating, num_reviews, district, type, source_table
    FROM (
        SELECT p_id AS id, p_name AS name, p_address AS address, p_image as image, p_rating as rating,p_num_reviews as num_reviews ,p_district AS district, p_type AS type, 'tbl_place' AS source_table
        FROM tbl_place
        UNION
        SELECT a_id AS id, a_name AS name, a_address AS address, a_image as image, a_rating as rating,a_num_reviews as num_reviews , a_district AS district, a_type AS type, 'tbl_accommodation' AS source_table
        FROM tbl_accommodation
        UNION
        SELECT r_id AS id, r_name AS name, r_address AS address, r_image as image, r_rating as rating,r_num_reviews as num_reviews , r_district AS district, r_type AS type, 'tbl_restaurant' AS source_table
        FROM tbl_restaurant
        UNION
        SELECT c_id AS id, c_name AS name, c_address AS address, c_image as image, c_rating as rating,c_num_reviews as num_reviews , c_district AS district, c_type AS type, 'tbl_cafe' AS source_table
        FROM tbl_cafe
    ) AS combined_table
    WHERE name LIKE '" . $condition . "%'
    ORDER BY name ASC LIMIT " . $start . "," . $contents_per_page . ";");
} else if (isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && !isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
} else if (!isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT id, name, address, image, rating, num_reviews, district, type, source_table
    FROM (
        SELECT p_id AS id, p_name AS name, p_address AS address, p_image as image, p_rating as rating,p_num_reviews as num_reviews ,p_district AS district, p_type AS type, 'tbl_place' AS source_table
        FROM tbl_place
        UNION
        SELECT a_id AS id, a_name AS name, a_address AS address, a_image as image, a_rating as rating,a_num_reviews as num_reviews , a_district AS district, a_type AS type, 'tbl_accommodation' AS source_table
        FROM tbl_accommodation
        UNION
        SELECT r_id AS id, r_name AS name, r_address AS address, r_image as image, r_rating as rating,r_num_reviews as num_reviews , r_district AS district, r_type AS type, 'tbl_restaurant' AS source_table
        FROM tbl_restaurant
        UNION
        SELECT c_id AS id, c_name AS name, c_address AS address, c_image as image, c_rating as rating,c_num_reviews as num_reviews , c_district AS district, c_type AS type, 'tbl_cafe' AS source_table
        FROM tbl_cafe
    ) AS combined_table
    WHERE name LIKE '" . $condition . "%' AND district='" . $district . "'
    ORDER BY name ASC LIMIT " . $start . "," . $contents_per_page . ";");
} //if destination and type is selected
else if (isset($_GET['destination']) && !isset($_GET['district']) && isset($_GET['type']) && !isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_type='" . $type . "' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
} //if destination and query is selected
else if (isset($_GET['destination']) && !isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_name ASC LIMIT " . $start . "," . $contents_per_page . ";");
} //if destination, district and type are selected
else if (isset($_GET['destination']) && isset($_GET['district']) && isset($_GET['type']) && !isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' AND " . $first_char . "_type='" . $type . "' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
} //if district,destination and query is selected
else if (isset($_GET['destination']) && isset($_GET['district']) && !isset($_GET['type']) && isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' AND " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
} //if destination,type and query is selected
else if (isset($_GET['destination']) && !isset($_GET['district']) && isset($_GET['type']) && isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_type='" . $type . "' AND " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
} //if district,destination,type and query are selected
else if (isset($_GET['destination']) && isset($_GET['district']) && isset($_GET['type']) && isset($_GET['query'])) {
    $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $destination . " where " . $first_char . "_district='" . $district . "' AND " . $first_char . "_type='" . $type . "' AND " . $first_char . "_name LIKE '" . $condition . "%' ORDER BY " . $first_char . "_rating DESC LIMIT " . $start . "," . $contents_per_page . ";");
}


include "user/include/star_rating.inc.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($_GET['destination']))
            echo ucfirst($destination) . "s | ";
        else
            echo "Searched Destinations | "; ?>
        <?php if (isset($_GET['district']))
            echo $district;
        echo " Traverse Nepal"; ?>
    </title>
    <link rel="icon" href="image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="user/style/header_style.css">
    <link rel="stylesheet" href="user/style/footer_style.css">
    <link rel="stylesheet" href="user/style/attraction_list_style.css">
    <link rel="stylesheet" href="user/style/feed_container_style.css">
    <link rel="stylesheet" href="user/style/pagination_style.css">
    <link rel="stylesheet" href="user/style/breadcrumb_style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/ed931f650e.js" crossorigin="anonymous"></script> -->
</head>

<body>
    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="user/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>
    <!-- Reload Animation -->
    <header>
        <?php include "user/include/header.inc.php" ?>
    </header>

    <main>

        <!-- including breadcrumb -->
        <?php include "user/include/breadcrumb.inc.php" ?>

        <div class="attractions-list-container">

            <div class="attractions-container">

                <div class="attractions-list-title">
                    <div class="list-title">
                        <?php echo $title_text ?>
                    </div>
                </div>

                <ul class="attractions-list-body">
                    <!-- php code here -->
                    <?php while ($pagination_result = $pagination_query_execute->fetch_assoc()) {
                        $start++; ?>
                        <!-- php code here -->
                        <li class="attraction-content" id="<?php
                        if (isset($_GET['destination']))
                            echo $pagination_result[$first_char . '_name'];
                        else
                            echo $pagination_result['name']; ?>">
                            <?php
                            if (isset($_GET['destination']) && $_GET['destination'] == 'district') {
                                echo '<a href="./district_page.php?district=' . $pagination_result['d_name'];
                            } else {
                                if (isset($_GET['destination'])) {
                                    echo '<a href="./destination.php?district=';
                                    echo $pagination_result[$first_char . '_district'];
                                } else {
                                    echo '<a href="./destination.php?district=';
                                    echo $pagination_result['district']; ?>&destination=<?php
                                }
                                if (isset($_GET['destination']))
                                    echo "&destination=".$destination;
                                else
                                    echo substr($pagination_result['source_table'], 4); ?>&dest_id=<?php
                                       if (isset($_GET['destination']))
                                           echo $pagination_result[$first_char . '_id'];
                                       else
                                           echo $pagination_result['id'];
                            }
                            ?>">

                            <div class="attraction-image-container">
                                <img src="<?php
                                if (isset($_GET['destination']))
                                    echo $pagination_result[$first_char . '_image'];
                                else
                                    echo $pagination_result['image']; ?>" alt="This is <?php
                                      if (isset($_GET['destination']))
                                          echo $pagination_result[$first_char . '_name'];
                                      else
                                          echo $pagination_result['name']; ?>'s picture.">
                            </div>

                            <div class="bottom-content">
                                <div class="attraction-name">
                                    <?php
                                    if (isset($_GET['destination']))
                                        echo $start . ". " . $pagination_result[$first_char . '_name'];
                                    else
                                        echo $start . ". " . $pagination_result['name']; ?>
                                </div>
                                <div class="attraction-rating-review">
                                    <div class="attraction-rating">
                                        <?php
                                        if (isset($_GET['destination'])) {
                                            if ($_GET['destination'] != 'district')
                                                star_ratings($pagination_result[$first_char . '_rating']);
                                        } else
                                            star_ratings($pagination_result['rating']); ?>
                                    </div>

                                    <div class="attraction-review">
                                        <?php
                                        if (isset($_GET['destination'])) {
                                            if ($_GET['destination'] != 'district')
                                                echo $pagination_result[$first_char . '_num_reviews'];
                                        } else
                                            echo $pagination_result['num_reviews']; ?>
                                    </div>
                                </div>
                                <div class="attraction-type">
                                    <?php
                                    if (isset($_GET['destination']))
                                        echo $pagination_result[$first_char . '_type'];
                                    else
                                        echo $pagination_result['type']; ?>
                                </div>
                            </div>

                            </a>
                            <div class="rating-icon-circle">
                                <button class="like-btn" data-liked="no" data-destination-type="<?php echo $destination; ?>"
                                    data-destination-id="<?php 
                                    if($destination=="district") 
                                    echo $pagination_result['d_name'];
                                    else
                                    echo $pagination_result[$first_char . '_id']; ?>">
                                    <svg viewBox="0 0 24 24" width="24px" height="24px"><!--haven't applied css-->
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.798 5.786A5.769 5.769 0 017.72 4.25c1.455 0 2.857.548 3.922 1.536l.005.005.341.322.332-.317a5.769 5.769 0 013.928-1.54c1.458 0 2.862.55 3.928 1.54l.004.004c1.093 1.032 1.599 2.324 1.569 3.662-.03 1.323-.578 2.643-1.5 3.785-.884 1.096-2.85 2.943-4.547 4.478a183.566 183.566 0 01-3.153 2.785l-.069.059-.489-.569.49.569-.486.416-.488-.412a101.98 101.98 0 01-7.75-7.288l-.021-.021-.02-.023c-1.725-2.115-2.203-5.32.08-7.453l.002-.002zm8.19 13.226a174.415 174.415 0 002.708-2.4c1.72-1.556 3.59-3.32 4.385-4.306.757-.939 1.148-1.948 1.168-2.877.02-.912-.313-1.795-1.097-2.536a4.269 4.269 0 00-2.904-1.138 4.269 4.269 0 00-2.903 1.136l-1.35 1.292-1.375-1.3a4.269 4.269 0 00-2.9-1.133 4.269 4.269 0 00-2.901 1.135c-1.507 1.408-1.353 3.659.042 5.385a100.45 100.45 0 007.127 6.742z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </li>

                        <!-- php code here -->
                    <?php } ?>
                    <!-- php code here -->
                </ul>

            </div>
        </div>

        <!-- including pagination -->

        <?php if ($pages > 1)
            include "user/include/pagination.inc.php"; ?>
        <!-- including pagination -->
    </main>

    <footer>
        <?php include "user/include/footer.inc.php" ?>
    </footer>
    <script src="user/script/reload_animation.js"></script>
    <script src="user/script/ajax_script/like_update.js"></script>
    <?php include "user/include/like_update_reload.inc.php"; ?>
</body>

</html>