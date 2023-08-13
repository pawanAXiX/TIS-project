<?php
if(isset($_GET['type'])){
    if($_GET['type']=="place"){
        $id = $_GET['id'];
        include "config/get_Attraction.php";
        if ($res->num_rows> 0) {
            $row = $res->fetch_assoc();
            $name = $row['p_name'];
            $desc = $row['p_desc'];
            $type = $row['p_type'];
            $image = $row['p_image'];
            $address = $row['p_address'];
            $district = $row['p_district'];
            $latitude = $row['p_latitude'];
            $longitude = $row['p_longitude'];
            $rating = $row['p_rating'];
            $reviews = $row['p_num_reviews'];
        }
    }
    else if($_GET['type']=="accommodation"){
        include "config/get_Accommodation.php";
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $name = $row['a_name'];
            $services = $row['a_services'];
            $type = $row['a_type'];
            $image = $row['a_image'];
            $address = $row['a_address'];
            $district = $row['a_district'];
            $latitude = $row['a_latitude'];
            $longitude = $row['a_longitude'];
            $rating = $row['a_rating'];
            $reviews = $row['a_num_reviews'];
            $rooms= $row['a_no_of_rooms'];
            $rate= $row['a_room_rate'];
            $phone= $row['a_phone'];
            $email= $row['a_email'];
            $website= $row['a_website'];

        }
    }
    else if($_GET['type']=="cafe"){
        include "config/get_Cafe.php";
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $name = $row['c_name'];
            $services = $row['c_services'];
            $type = $row['c_type'];
            $image = $row['c_image'];
            $address = $row['c_address'];
            $district = $row['c_district'];
            $latitude = $row['c_latitude'];
            $longitude = $row['c_longitude'];
            $rating = $row['c_rating'];
            $reviews = $row['c_num_reviews'];
            $phone= $row['c_phone'];
            $email= $row['c_email'];
            $website= $row['c_website'];
            $starttime = $row['c_starttime'];
            $closetime = $row['c_closetime'];

        }
    }
    else if($_GET['type']=="restaurant"){
        include "config/get_restaurants.php";
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $name = $row['r_name'];
            $services = $row['r_services'];
            $type = $row['r_type'];
            $image = $row['r_image'];
            $address = $row['r_address'];
            $district = $row['r_district'];
            $latitude = $row['r_latitude'];
            $longitude = $row['r_longitude'];
            $rating = $row['r_rating'];
            $reviews = $row['r_num_reviews'];
            $phone= $row['r_phone'];
            $email= $row['r_email'];
            $website= $row['r_website'];
            $starttime = $row['r_starttime'];
            $closetime = $row['r_closetime'];
        }
    }
} 
?>