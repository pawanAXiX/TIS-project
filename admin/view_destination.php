<?php

require "config/dbconn.inc.php";

if (isset($_GET['district']) && isset($_GET['destination']) && isset($_GET['dest_id'])) {
    $district = $_GET['district'];
    $destination = $_GET['destination'];
    $destination_id = $_GET['dest_id'];
    $first_char = substr($destination, 0, 1);
    $destination_record_exec = $con->query("SELECT * FROM tbl_" . $destination . " WHERE " . $first_char . "_id = '" . $destination_id . "' AND " . $first_char . "_district = '" . $district . "'");
    $destination_record = $destination_record_exec->fetch_assoc();

    $destination_name = $destination_record[$first_char . '_name'];

    if ($destination == "place") {
        $destination_desc = $destination_record[$first_char . '_desc'];
    }

    $destination_image = $destination_record[$first_char . '_image'];
    $destination_address = $destination_record[$first_char . '_address'];
    $destination_latitude = $destination_record[$first_char . '_latitude'];
    $destination_longitude = $destination_record[$first_char . '_longitude'];
    $destination_type = $destination_record[$first_char . '_type'];
    $destination_rating = $destination_record[$first_char . '_rating'];
    $destination_num_reviews = $destination_record[$first_char . '_num_reviews'];

    if ($destination == "accommodation") {
        $destination_phone = $destination_record[$first_char . '_phone'];
        $destination_email = $destination_record[$first_char . '_email'];
        $destination_website = $destination_record[$first_char . '_website'];
        $destination_room = $destination_record[$first_char . '_no_of_rooms'];
        $destination_room_rate = $destination_record[$first_char . '_room_rate'];
        $destination_service = $destination_record[$first_char . '_services'];
    }

    if ($destination == "restaurant") {
        $destination_phone = $destination_record[$first_char . '_phone'];
        $destination_email = $destination_record[$first_char . '_email'];
        $destination_website = $destination_record[$first_char . '_website'];
        $destination_service = $destination_record[$first_char . '_services'];
        $destination_start_time = $destination_record[$first_char . '_starttime'];
        $destination_close_time = $destination_record[$first_char . '_closetime'];
    }

    if ($destination == "cafe") {
        $destination_phone = $destination_record[$first_char . '_phone'];
        $destination_email = $destination_record[$first_char . '_email'];
        $destination_website = $destination_record[$first_char . '_website'];
        $destination_service = $destination_record[$first_char . '_services'];
        $destination_start_time = $destination_record[$first_char . '_starttime'];
        $destination_close_time = $destination_record[$first_char . '_closetime'];
    }

}
include "config/star_rating.inc.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $destination_name . " | " . $district . "  Traverse Nepal"; ?>
    </title>
    <link rel="icon" href="image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="assets/style/view_destination_style.css">
</head>

<body class="destination-page">
    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="assets/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>
    <!-- Reload Animation -->

    <!-- main -->
    <main>


        <div class="destination-container">
            <section class="destination-title-container">
                <div class="destination-title">
                    <?php echo $destination_name; ?>
                </div>
                <div class="destination-share-like-container">
                    <div class="share-btn-container" id="share-dest">
                        <button>
                            <svg viewBox="0 0 24 24" width="20px" height="20px">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 .94l4.102 4.101-1.06 1.06-2.292-2.29V12.5h-1.5V3.81L8.959 6.103l-1.061-1.06L12 .938zM4.043 8.301C4.505 7.73 5.2 7.25 6.003 7.25H8v1.5H6.004c-.196 0-.503.134-.793.494-.28.347-.461.81-.461 1.256v7.956c0 1.17.72 1.794 1.254 1.794h11.992c.538 0 1.254-.628 1.254-1.794V10.5c0-.448-.18-.91-.46-1.257-.289-.359-.595-.493-.794-.493H16v-1.5h1.996c.806 0 1.501.48 1.963 1.052.47.585.791 1.372.791 2.198v7.956c0 1.638-1.072 3.294-2.754 3.294H6.004c-1.674 0-2.754-1.645-2.754-3.294V10.5c0-.826.322-1.614.793-2.198z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </section>
            <section class="destination-desc-image-container">
                <div class="destination-desc-image">
                    <div class="destination-image-container">
                        <img src=".<?php echo $destination_image ?>"
                            alt="This is <?php echo $destination_name ?>'s picture.">
                    </div>
                    <div class="destination-desc-container">
                        <div class="desc-title">
                            About
                            <?php echo $destination_name; ?>
                        </div>
                        <?php if ($destination == "place") {
                            echo ('<div class="desc-text-place">' . $destination_desc . '</div>');
                        } else {
                            echo ('<div class="desc-destination">');
                            if ($destination == "accommodation") {
                                echo ('<div class="room-info-details">
                                    <div class="room-info-title">Room Info :</div>
                                    <div class="room-info">
                                    <span>
                                    <div class="room-details">
                                    ' . $destination_room . '
                                    </div>
                                    Rooms
                                    </span>
                                    <span>
                                    <div class="room-rate-details">
                                    <small style="font-size: small; display:contents;">NRs.</small>' . $destination_room_rate . '/-
                                    </div>
                                    Per room
                                    </span>
                                    </div>
                                    </div>');
                            } else {
                                echo ('<div class="open-close-info-details">
                                <div class="open-close-info-title">' . ucfirst($destination) . '\'s Info :</div>
                                <div class="open-close-info">
                                <span>
                                Opens at :
                                <div class="open-details">
                                ' . $destination_start_time . '
                                <small style="font-size: small; display:contents;">A.M</small>
                                </div>
                                </span>
                                <span>
                                Closes at :
                                <div class="close-details">
                                
                                ' . ltrim(date('h:i', strtotime($destination_close_time))) . ' 

                                <!--// Converting 24-hour format to 12-hour format and removing leading 0 from the date format-->

                                <small style="font-size: small; display:contents;">P.M</small>
                                </div>
                                </span>
                                </div>
                                </div>');

                            }
                            echo ('<div class="services-info-details">
                                    <div class="services-info-title">Services :
                                    <div class="services-info">
                                    <ul>
                                    <li>' . $destination_service . '</li>
                                    </ul>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="contact-info-details">
                                    <div class="contact-info-title">Contact Info :</div>
                                    <div class="contact-info">
                                    <a href="tel:' . $destination_phone . '">
                                    <div class="phone-details">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 512 512">
                                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                                    </svg>
                                    Phone
                                    </div>
                                    </a>
                                    <a href="' . $destination_website . '" target="_blank">
                                    <div class="email-details">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 640 512"><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                                    </svg>
                                    Website
                                    </div>
                                    </a>
                                    <a href="mailto:' . $destination_email . '">
                                    <div class="website-details">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 512 512">
                                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                    </svg>
                                    Email
                                    </div>
                                    </a>
                                    </div>
                                    </div>
                                    </div>'
                            );
                        }
                        ?>

                    </div>
                </div>
            </section>
            <section class="destination-information-container">
                <div class="dest-type-container">
                    <div class="dest-info-title">TYPE OF DESTINATION:</div>
                    <div class="dest-type">
                        <?php echo $destination_type; ?>
                    </div>
                </div>
                <div class="dest-address-container">
                    <div class="dest-info-title">ADDRESS OF DESTINATION:</div>
                    <div class="dest-type">
                        <?php echo $destination_address; ?>
                    </div>
                </div>
                <div class="dest-rating-container">
                    <div class="dest-info-title">RATING OF DESTINATION:</div>
                    <div class="dest-type">
                        <?php star_ratings($destination_rating);
                                echo "(".$destination_rating.")"; ?>
                        <div class="dest-num-reviews">(
                            <?php echo $destination_num_reviews; ?>)
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <script src="assets/script/view_destination_share.js"></script>
    <script src="assets/script/reload_animation.js"></script>

</body>

</html>