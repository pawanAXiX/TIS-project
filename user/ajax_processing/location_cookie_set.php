<?php
// setting cookie for user's current location in latitude and longitude
if(isset($_POST['latitude']) && isset($_POST['longitude']) &&  isset($_POST['district'])){
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $district=$_POST['district'];

    setcookie('latitude',$latitude);//temporary cookie for a sessions
    setcookie('longitude',$longitude);//temporary cookie for a sessions
    setcookie('district',$district);//temporary cookie for a sessions
    echo "Cookie set sucessfully lat=".$_COOKIE['latitude']." & long=".$_COOKIE['longitude']." and district=".$district;
}