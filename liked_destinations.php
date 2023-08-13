<?php

session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['not_signed'] = "Plz, Log in first";
    header('location:login.php');
}

$user_email = $_SESSION['email'];
require "user/include/dbconn.inc.php";
include "user/include/star_rating.inc.php";

$user_id_query_exec = $con->query("SELECT u_id FROM tbl_user WHERE u_email = '$user_email';");
$user_data_row = $user_id_query_exec->fetch_assoc();
$user_id = $user_data_row['u_id'];

// to update the liked destinations when the page reloads
$liked_destinations_details_exec = $con->query("SELECT * FROM tbl_user_liked_trip WHERE like_user_id='" . $user_id . "';");


$total_dest_liked = $liked_destinations_details_exec->num_rows;

////////////////////////////////////////////////////////////////////////////////////////////////
$start = 0;
$contents_per_page = 9;
//calculating no of pages
$pages = ceil($total_dest_liked / $contents_per_page);

if (isset($_GET['page'])) {
    $page = $_GET['page'] - 1;
    $start = $page * $contents_per_page;
}
//////////////////////////////////////////////////////////////////////////////////////////////////

$liked_dest_page=$con->query("SELECT * FROM tbl_user_liked_trip WHERE like_user_id='" . $user_id . "' LIMIT ".$start." , ".$contents_per_page." ;")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liked Destinations | Traverse Nepal</title>
    <link rel="icon" href="image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="user/style/header_style.css">
    <link rel="stylesheet" href="user/style/footer_style.css">
    <link rel="stylesheet" href="user/style/attraction_list_style.css">
    <link rel="stylesheet" href="user/style/liked_destinations_style.css">
    <?php if(!$total_dest_liked>0)
    echo '<link rel="stylesheet" href="user/style/search_error_page_style.css">';
    ?>
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
        <!-- including header file -->
        <?php include "user/include/header.inc.php"; ?>
        <!-- including header file -->
    </header>

    <main>
        <?php if (!$total_dest_liked > 0) {?>
            <div class="empty-result-container">
            <div class="empty-result-description">
                <div class="sorry-desc-container">
                    <div class="sorry-title">Whoa!!!</div>
                    <div class="sorry-desc"> It looks like you haven't liked any destinations yet.</div>
                </div>
            </div>
        </div>
        <?php } else{ ?>

        

        <!-- including breadcrumb -->
        <?php include "user/include/breadcrumb.inc.php" ?>

        <div class="attractions-list-container">

            <div class="attractions-container">

                <div class="attractions-list-title">
                    <div class="list-title">
                        <?php echo "Hello, ".$_SESSION['name']." Here are the destinations that you've liked"; ?>
                    </div>
                </div>

                <ul class="attractions-list-body">
                    <!-- php code here -->
                    <?php
                    while ($liked_destinations_row = $liked_dest_page->fetch_assoc()) {
                        $dest_type = $liked_destinations_row['like_dest_type'];
                        $dest_id = $liked_destinations_row['like_dest_id'];
                        $first_char = substr($dest_type, 0, 1);
                        if ($dest_type == 'district') {
                            $pagination_query_execute = $con->query("SELECT * FROM tbl_district WHERE d_name='" . $dest_id . "';");
                        } else {
                            $pagination_query_execute = $con->query("SELECT * FROM tbl_" . $dest_type . " where " . $first_char . "_id='" . $dest_id . "';");
                        }
                        while ($pagination_result = $pagination_query_execute->fetch_assoc()) {
                            $start++; ?>
                            <!-- php code here -->
                            <li class="attraction-content" id="<?php
                            if ($dest_type == "district")
                                echo $pagination_result['d_name'];
                            else
                                echo $pagination_result[$first_char . '_id']; ?>">
                                <?php
                                if ($dest_type == "district") {
                                    echo '<a href="./district_page.php?district=' . $pagination_result['d_name'];
                                } else {
                                    echo '<a href="./destination.php?district=' . $pagination_result[$first_char . '_district'] . '&destination=' . $dest_type . '&dest_id=' . $pagination_result[$first_char . '_id'] . '';
                                }
                                ?>">

                                <div class="attraction-image-container">
                                    <img src="<?php echo $pagination_result[$first_char . '_image']; ?>"
                                        alt="This is <?php echo $pagination_result[$first_char . '_name']; ?>'s picture.">
                                </div>

                                <div class="bottom-content">
                                    <div class="attraction-name">
                                        <?php
                                        echo $start . ". " . $pagination_result[$first_char . '_name']; ?>
                                    </div>
                                    <div class="attraction-rating-review">
                                        <div class="attraction-rating">
                                            <?php
                                            if ($dest_type != 'district')
                                                star_ratings($pagination_result[$first_char . '_rating']);
                                            ?>
                                        </div>

                                        <div class="attraction-review">
                                            <?php
                                            if ($dest_type != 'district')
                                                echo $pagination_result[$first_char . '_num_reviews'];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="attraction-type">
                                        <?php echo $pagination_result[$first_char . '_type']; ?>
                                    </div>
                                </div>

                                </a>
                                <div class="rating-icon-circle">
                                    <button class="like-btn" data-liked="no" data-destination-type="<?php echo $dest_type; ?>"
                                        data-destination-id="<?php
                                        if ($dest_type == "district")
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
                        <?php }
                    } ?>
                    <!-- php code here -->
                </ul>

            </div>
        </div>
    </main>

    <!-- including pagination -->

    <?php if ($pages > 1)
        include "user/include/pagination.inc.php"; ?>
    <!-- including pagination -->

    <?php } ?>
    </main>

    <footer>
        <?php include "user/include/footer.inc.php" ?>
    </footer>
    <script src="user/script/reload_animation.js"></script>
    <script src="user/script/ajax_script/like_update.js"></script>
    <?php include "user/include/like_update_reload.inc.php"; ?>

</body>

</html>