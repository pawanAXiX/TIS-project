<?php
session_start();
require "config/dbconn.inc.php";


$district_query_execute = $con->query("SELECT d_name FROM tbl_district;");
include "config/viewUpdate.inc.php";

if (isset($_GET['type']))
    $destination = $_GET['type'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Destination</title>
    <link rel="icon" href="../image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="assets/style/add_destination_style.css">
    <link rel="stylesheet" href="assets/style/reload_animation_style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</head>

<body>
    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="assets/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>
    <!-- Reload Animation -->

    <main>
        <div class="suggestion-container" <?php if (!isset($_GET['type']))
            echo ('style="margin-top:118px;"'); ?>>
            <div class="suggestion-desc-title">
                Suggest
                <?php if (isset($_GET['type']))
                    echo $_GET['type'];
                else
                    echo "destination";
                ?>
                to Traverse Nepal!!!
            </div>
            <?php if (!isset($_GET['type'])) { ?>
                <div class="suggestion-type-title">
                    I want to Suggest a
                </div>
                <span>
                    <div class="menu">
                        <div class="menu-container">
                            <div class="menu-box">
                                <button class="menu-content" onclick="window.location.href='?type=place';">
                                    <span class="name">Attractions</span>
                                    <span class="blank"></span>
                                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            width="24px" height="24px">
                                            <path
                                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                        </svg></span>
                                </button>
                            </div>
                            <div class="menu-box">
                                <button class="menu-content" onclick="window.location.href='?type=accommodation';">
                                    <span class="name">Accommodation</span>
                                    <span class="blank"></span>
                                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                            width="24px" viewBox="0 0 512 512">
                                            <path
                                                d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                                        </svg></span>
                                </button>
                            </div>
                            <div class="menu-box">
                                <button class="menu-content" onclick="window.location.href='?type=restaurant';">
                                    <span class="name">Restaurants</span>
                                    <span class="blank"></span>
                                    <span class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                            width="24px"
                                            viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z" />
                                        </svg></span>
                                </button>
                            </div>
                            <div class="menu-box">
                                <button class="menu-content" onclick="window.location.href='?type=cafe';">
                                    <span class="name">Cafes</span>
                                    <span class="blank"></span>
                                    <span class="menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px"
                                            viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M96 64c0-17.7 14.3-32 32-32H448h64c70.7 0 128 57.3 128 128s-57.3 128-128 128H480c0 53-43 96-96 96H192c-53 0-96-43-96-96V64zM480 224h32c35.3 0 64-28.7 64-64s-28.7-64-64-64H480V224zM32 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </span>
            <?php } ?>
            <?php
            if (isset($_GET['type'])) {
                ?>
                <div class="suggestion-form-map-container">
                    <div class="suggestion-form-container">
                        <form method="post" id="dest-suggest-form" enctype="multipart/form-data" class="suggestion-form"
                            action="config/pushUpdate.php">
                            <input type="hidden" name="old_image"  value="<?php echo $image;?>" >
                            <input type="hidden" name="destination" id="hidden_value" value="<?php echo $destination; ?>">
                            <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" >
                            <div class="destination-name">
                                <label for="dest-name">
                                    <?php echo ucfirst($destination); ?> Name :
                                </label>
                                <input name="name" id="dest-name" type="text" value="<?php echo $name;?>"
                                    placeholder="Enter <?php echo ucfirst($destination); ?>'s name" maxlength="100"
                                    required />
                            </div>
                            <?php if ($destination == "place") { ?>
                                <div class="destination-description">
                                    <label for="dest-desc">Place Description :</label>
                                    <textarea name="desc"  id="dest-desc" cols="30" rows="5" maxlength="700" style="resize: none"
                                        placeholder="Enter the description for the destination (Max characters : 700 )"
                                        required> <?php echo $desc;?> </textarea>
                                </div>
                            <?php } else { ?>
                                <div class="destination-services">
                                    <label for="dest-services">
                                        <?php echo ucfirst($destination); ?> Services :
                                    </label>
                                    <textarea name="services" id="dest-services" rows="3" maxlength="50" style="resize: none"
                                        placeholder="Enter the services of <?php echo $destination; ?>(More than one services must be separated by comma ',') (Max characters : 50 )" 
                                        required onkeyup="javascript:validateServices(this.value)"><?php echo htmlentities($services);?></textarea>
                                </div>
                            <?php } ?>
                            <div class="destination-type">
                                <label for="dest-type">Type of
                                    <?php echo $destination; ?>:
                                </label>
                                <input type="text" value="<?php echo $type;?>" name="type" id="dest-type" required maxlength="50"
                                    onkeyup="javascript:validateType(this.value)"></input>
                            </div>
                            <?php
                            if ($destination == 'accommodation') {
                                ?>
                                <div>
                                    <label for="dest-room">
                                        No of Rooms:
                                    </label>
                                    <input type="number" name="rooms" pattern="^([1-9][0-9]{0,2}|1000)$"
                                        placeholder="must be >1 && <=1000">
                                </div>
                                <div>
                                    <label for="dest-room-rate">
                                        Room Rate:
                                    </label>
                                    <input type="number" name="room_rate" id="dest-room-rate" pattern="[0-9]{1,6}(\.[0-9]{2})?">
                                </div>
                                <?php
                            }
                            ?>
                            <div>
                                <label for="dest-image">Image of the
                                    <?php echo $destination; ?> :
                                </label>
                                <input type="file" value="<?php echo $image;?>"  id="image" accept="image/jpeg, image/png, image/gif" name="image"
                                    required>
                                    
                                    
                            </div>
                            <div>
                                <label for="dest-address">Address :</label>
                                <input type="text" value="<?php echo $address;?>" id="address" name="address" required maxlength="50"
                                    onkeyup="javascript:validateAddress(this.value)">
                            </div>
                            <div>
                                <label for="dest-district">District :</label>
                                <select name="district" id="dest-district" required>
                                    <option value="" selected disabled>Plz, choose a district</option>
                                    <?php while ($district_row = $district_query_execute->fetch_assoc()) {
                                        ?>
                                        <option value="<?php echo $district_row['d_name']; ?>" <?php if ($district == $district_row['d_name']) {
                                               echo "selected";
                                           } ?> > <?php echo $district_row['d_name']; ?>  </option>
                                        <!-- echo '<option value="' . $district_row['d_name'] . '" >' . $district_row['d_name'] . '</option>'; -->
                                     <?php
                                    } 
                                     ?>
                                </select>
                            </div>
                            <div class="dest-coordinate-title">
                                <i>
                                    Move the pointer in the map to set latitude and latitude
                                </i>
                            </div>
                            <div class="destination-coordinates">
                                <div>
                                    <label for="dest-latitude">Latitude :</label>
                                    <input type="number" name="latitude" id="dest-latitude" value="<?php echo $latitude; ?>"  required step="any">
                                </div>
                                <div>
                                    <label for="dest-longitude">Longitude :</label>
                                    <input type="number" name="longitude" id="dest-longitude" value="<?php echo $longitude; ?>"  required step="any">
                                </div>
                            </div>
                            <div class="destination-rating">
                                <label for="dest-rating">Rating :</label>
                                <input type="number" name="rating" id="dest-rating" required placeholder="for e.g 2.0" value="<?php echo $rating; ?>"
                                    min="1" max="5" step="0.1" pattern="[1-5](\.\d)?" />
                            </div>
                            <div class="destination-num-reviews">
                                <label for="dest-review">No of Reviews :</label>
                                <input type="number" name="review" id="dest-review" min="0" max="299999999" value="<?php echo $reviews; ?>"
                                    pattern="\d{1,9}" required placeholder="Enter number of reviews" />
                            </div>
                            <?php
                            if ($destination != 'place') {
                                ?>
                                <?php if ($destination != 'accommodation') { ?>
                                    <div class="destination-start">
                                        <label for="dest-start">Start time :</label>
                                        <input type="text" name="starttime" id="dest-start" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" value="<?php echo $starttime; ?>"
                                            placeholder="Enter time in HH:MM format" required />
                                    </div>
                                    <?php
                                    ?>
                                    <div class="destination-close">
                                        <label for="dest-close">Close time :</label>
                                        <input type="text" name="closetime" id="dest-close" pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]" value="<?php echo $closetime; ?>"
                                            placeholder="Enter time in HH:MM format" required />
                                    </div>
                                <?php } ?>
                                <div class="dest-contact-info-title">Contact Information of
                                    <?php echo $destination; ?>
                                </div>
                                <div class="dest-contact-info">
                                    <div class="destination-phone">
                                        <label for="dest-phone">Phone :</label>
                                        <input type="text" name="phone" id="dest-phone" maxlength="14"
                                            onkeyup="javascript:validatePhone(this.value)" value="<?php echo $phone; ?>"  required
                                            placeholder="+9770000000000" />
                                    </div>
                                    <div class="destination-email">
                                        <label for="dest-email">Email :</label>
                                        <input type="email" name="email" id="dest-email"
                                            onkeyup="javascript:validateEmail(this.value)" maxlength="100" value="<?php echo $email; ?>"  required>
                                    </div>
                                    <div class="destination-website">
                                        <label for="dest-website">Web URL :</label>
                                        <input type="url" name="website" id="dest-website" placeholder="https://example.com"
                                            onkeyup="javascript:validateWebsite(this.value)" value="<?php echo $website; ?>"  required>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <p class="error_style" id="input-error" style="height:15px"></p>
                            <div class="dest-submit">
                                <input type="submit" name="submit" id="dest-submit" value="Submit">
                                <input type="button" name="return" id="dest-return" value="Return" onclick="javascript:window.location.href='add_destination.php'">
                            </div>
                            
                        </form>
                    </div>

                    <div class="map-container">
                        <!-- <div class="view-map"></div> -->
                        <?php include "config/maps/form_map.inc.php"; ?>
                        <img src="../<?php echo $image;?>" style="display:inline-block;height:auto;width:250px;margin-top:50px;" >
                        

                    </div>
                </div>
            <?php } ?>

        </div>


    </main>

    <?php
    if (isset($_SESSION['action'])) {
        echo "<script> alert('" . $_SESSION['action'] . "') </script>";
        unset($_SESSION['action']);
    }
    ?>
    <!-- <script src="script/add_destination.js"></script> -->
    <script src="assets/script/reload_animation.js"></script>
    <!-- <script src="assets/script/add_form_validation.js"></script> -->
</body>

</html>