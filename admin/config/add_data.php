<?php
session_start();
require "dbconn.inc.php";
if(isset($_POST['return'])){
    header('Location:admin.php');
}
else if(isset($_POST['submit'])){
    $destination = $_POST['destination'];
    if($destination=="place"){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $type = $_POST['type'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $image = $_FILES['image'];
        $fileName = $image["name"];
        $fileTmpPath = $image["tmp_name"];
        $imgpath = "../../image/place_images/" . $fileName;
        $check_file=move_uploaded_file($fileTmpPath, $imgpath);
        $db_image = "./image/place_images/" . $fileName;

        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $qry = "INSERT INTO `tbl_place` (`p_name`, `p_desc`, `p_image`, `p_address`, `p_district`, `p_latitude`, `p_longitude`, `p_type`, `p_rating`, `p_num_reviews`) VALUES ('$name', '$desc', '$db_image', '$address', '$district', '$latitude', '$longitude', '$type', '$rating', '$review')" ;
        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }

    }
    else if($destination=="cafe"){
        $name = $_POST['name'];
        $services = $_POST['services'];
        $type = $_POST['type'];

        $image = $_FILES['image'];
        $fileName = $image["name"];
        $fileTmpPath = $image["tmp_name"];
        $imgpath = "../../image/cafe_images/" . $fileName;
        $check_file=move_uploaded_file($fileTmpPath, $imgpath);
        $db_image = "./image/cafe_images/" . $fileName;

        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $web = $_POST['website'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $start=$_POST['start'];
        $close=$_POST['close'];

        $qry = "INSERT INTO `tbl_cafe` (`c_name`, `c_image`, `c_address`, `c_district`, `c_latitude`, `c_longitude`, `c_type`, `c_services`, `c_rating`, `c_num_reviews`, `c_phone`, `c_email`, `c_website`, `c_starttime`, `c_closetime`) VALUES ('$name', '$db_image', '$address', '$district', '$latitude', '$longitude', '$type', '$services', '$rating', '$review', '$phone', '$email', '$web', '$start', '$close')" ;
        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }
        else{
            echo "<script>alert('Cafe could not be added');</script>".$qry;
        }

    }
    else if($destination=="accommodation"){
        $name = $_POST['name'];
        $services = $_POST['services'];
        $type = $_POST['type'];

        $image = $_FILES['image'];
        $fileName = $image["name"];
        $fileTmpPath = $image["tmp_name"];
        $imgpath = "../../image/accommodation_images/" . $fileName;
        $check_file=move_uploaded_file($fileTmpPath, $imgpath);
        $db_image = "./image/accommodation_images/" . $fileName;

        $rooms = $_POST['rooms'];
        $rate = $_POST['room_rate'];
        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $web = $_POST['website'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];

        $qry = "INSERT INTO `tbl_accommodation` (`a_name`, `a_image`, `a_type`, `a_services`, `a_address`, `a_district`, `a_latitude`, `a_longitude`, `a_rating`, `a_num_reviews`, `a_no_of_rooms`, `a_room_rate`, `a_phone`, `a_email`, `a_website`) VALUES ('$name', '$db_image', '$type', '$services', '$address', '$district', '$latitude', '$longitude', '$rating', '$review', '$rooms', '$rate', '$phone', '$email', '$web')" ;
        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }
    }
    else if($destination=="restaurant"){
        $name = $_POST['name'];
        $services = $_POST['services'];
        $type = $_POST['type'];

        $image = $_FILES['image'];
        $fileName = $image["name"];
        $fileTmpPath = $image["tmp_name"];
        $imgpath = "../../image/restaurant_images/" . $fileName;
        $check_file=move_uploaded_file($fileTmpPath, $imgpath);
        $db_image = "./image/restaurant_images/" . $fileName;

        $address = $_POST['address'];
        $district = $_POST['district'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $web = $_POST['website'];
        $rating=$_POST['rating'];
        $review=$_POST['review'];
        $start=$_POST['start'];
        $close=$_POST['close'];

        $qry = "INSERT INTO `tbl_restaurant` (`r_name`, `r_image`, `r_address`, `r_district`, `r_latitude`, `r_longitude`, `r_type`, `r_services`, `r_rating`, `r_num_reviews`, `r_phone`, `r_website`, `r_email`, `r_starttime`, `r_closetime`) VALUES ('$name', '$db_image', '$address', '$district', '$latitude', '$longitude', '$type', '$services', '$rating', '$review', '$phone', '$web', '$email', '$start', '$close')" ;
        $result = $con->query($qry);
        if($result==TRUE){
            header("Location:../add_destination.php");
            $_SESSION['action'] = "Data Added Sucessfully";
        }
    }

}
else{
    echo "error";
}
?>