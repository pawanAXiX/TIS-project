<?php
session_start();
require "dbconn.inc.php";
if(isset($_POST['return'])){
    header('Location:admin.php');
}
else if(isset($_POST['submit'])){
    $destination = $_POST['destination'];
    if($destination=="place"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $type = $_POST['type'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $old_image = $_FILES['old_image'];
        $image = $_FILES['image']['name'];
        if($image != '') {
            if($old_image != '')
            {
                unlink("../." . $old_image);
            }
            $old_image = $image;
            $path = "../../image/place_images/".$old_image;  
            $temp_name = $_FILES['image']['tmp_name'];
            $db_image = "./image/place_images/" . $old_image;
            move_uploaded_file($temp_name,$path);
        }
        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $qry = "UPDATE `tbl_place` SET `p_name`='$name',`p_desc`='$desc',`p_image`='$db_image',`p_address`='$address',`p_district`='$district',`p_latitude`='$latitude',`p_longitude`='$longitude',`p_type`='$type',`p_rating`='$rating',`p_num_reviews`='$review' WHERE p_id=$id";

        // $qry = "INSERT INTO `tbl_place` (`p_name`, `p_desc`, `p_image`, `p_address`, `p_district`, `p_latitude`, `p_longitude`, `p_type`, `p_rating`, `p_num_reviews`) VALUES ('$name', '$desc', '$db_image', '$address', '$district', '$latitude', '$longitude', '$type', '$rating', '$review')" ;
        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }

    }
    else if($destination=="cafe"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $services = $_POST['services'];
        $type = $_POST['type'];
        $old_image = $_FILES['old_image'];
        $image = $_FILES['image']['name'];
        if($image != '') {
            if($old_image != '')
            {
                unlink("../." . $old_image);
            }
            $old_image = $image;
            $path = "../../image/cafe_images/".$old_image;  
            $temp_name = $_FILES['image']['tmp_name'];
            $db_image = "./image/cafe_images/" . $old_image;
            move_uploaded_file($temp_name,$path);
        }



        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $starttime=$_POST['starttime'];
        $closetime=$_POST['closetime'];

        $qry = "UPDATE `tbl_cafe` SET `c_name`='$name',`c_image`='$db_image',`c_address`='$address',`c_district`='$district',`c_latitude`='$latitude',`c_longitude`='$longitude',`c_type`='$type',`c_services`='$services',`c_rating`='$rating',`c_num_reviews`='$review',`c_phone`='$phone',`c_email`='$email',`c_website`='$website',`c_starttime`='$starttime',`c_closetime`='$closetime' WHERE c_id=$id";

        // $qry = "INSERT INTO `tbl_cafe` (`c_name`, `c_image`, `c_address`, `c_district`, `c_latitude`, `c_longitude`, `c_type`, `c_services`, `c_rating`, `c_num_reviews`, `c_phone`, `c_email`, `c_website`, `c_starttime`, `c_closetime`) VALUES ('$name', '$db_image', '$address', '$district', '$latitude', '$longitude', '$type', '$services', '$rating', '$review', '$phone', '$email', '$web', '$start', '$close')" ;

        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }

    }
    else if($destination=="accommodation"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $services = $_POST['services'];
        $type = $_POST['type'];

        $old_image = $_FILES['old_image'];
        $image = $_FILES['image']['name'];
        if($image != '') {
            if($old_image != '')
            {
                unlink("../." . $old_image);
            }
            $old_image = $image;
            $path = "../../image/accommodation_images/".$old_image;  
            $temp_name = $_FILES['image']['tmp_name'];
            $db_image = "./image/accommodation_images/" . $old_image;
            move_uploaded_file($temp_name,$path);
        }


        $rooms = $_POST['rooms'];
        $rate = $_POST['room_rate'];
        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $room = $_POST['rooms'];
        $rate = $_POST['room_rate'];

        $qry = "UPDATE `tbl_accommodation` SET `a_name`='$name',`a_image`='$db_image',`a_type`='$type',`a_services`='$services',`a_address`='$address',`a_district`='$district',`a_latitude`='$latitude',`a_longitude`='$longitude',`a_rating`='$rating',`a_num_reviews`='$review',`a_no_of_rooms`='$room',`a_room_rate`='$rate',`a_phone`='$phone',`a_email`='$email',`a_website`='$website' WHERE a_id=$id";

        // $qry = "INSERT INTO `tbl_accommodation` (`a_name`, `a_image`, `a_type`, `a_services`, `a_address`, `a_district`, `a_latitude`, `a_longitude`, `a_rating`, `a_num_reviews`, `a_no_of_rooms`, `a_room_rate`, `a_phone`, `a_email`, `a_website`) VALUES ('$name', '$db_image', '$type', '$services', '$address', '$district', '$latitude', '$longitude', '$rating', '$review', '$rooms', '$rate', '$phone', '$email', '$web')" ;

        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }
    }
    else if($destination=="restaurant"){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $services = $_POST['services'];
        $type = $_POST['type'];

        $old_image = $_FILES['old_image'];
        $image = $_FILES['image']['name'];
        if($image != '') {
            if($old_image != '')
            {
                unlink("../." . $old_image);
            }
            $old_image = $image;
            $path = "../../image/restaurant_images/".$old_image;  
            $temp_name = $_FILES['image']['tmp_name'];
            $db_image = "./image/restaurant_images/" . $old_image;
            move_uploaded_file($temp_name,$path);
        }


        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $starttime=$_POST['starttime'];
        $closetime=$_POST['closetime'];

        $qry = "UPDATE `tbl_restaurant` SET `r_name`='$name',`r_image`='$db_image',`r_address`='$address',`r_district`='$district',`r_latitude`='$latitude',`r_longitude`='$longitude',`r_type`='$type',`r_services`='$services',`r_rating`='$rating',`r_num_reviews`='$review',`r_phone`='$phone',`r_website`='$website',`r_email`='$email',`r_starttime`='$starttime',`r_closetime`='$closetime' WHERE r_id=$id";

        // $qry = "INSERT INTO `tbl_restaurant` (`r_name`, `r_image`, `r_address`, `r_district`, `r_latitude`, `r_longitude`, `r_type`, `r_services`, `r_rating`, `r_num_reviews`, `r_phone`, `r_website`, `r_email`, `r_starttime`, `r_closetime`) VALUES ('$name', '$db_image', '$address', '$district', '$latitude', '$longitude', '$type', '$services', '$rating', '$review', '$phone', '$web', '$email', '$starttime', '$closetime')" ;


        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../admin.php?type=".$destination);
            $_SESSION['action'] = "Data Updated Sucessfully".$starttime;
        }
    }

}
else{
    echo "error";
}
?>