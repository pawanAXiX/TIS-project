<?php
session_start();
require "dbconn.inc.php";

if(isset($_POST['email'])&& isset($_POST['pass'])){
    $name =cleanInput($_POST['name']);
    $email=cleanInput($_POST['email']);
    $pass = cleanInput($_POST['pass']);
    $city = cleanInput($_POST['city']);
    $district = ucfirst(cleanInput($_POST['district']));
    $gender = cleanInput($_POST['gender']);
    $dob = cleanInput($_POST['reg_date']);

    if (isEmailRegistered($con, $email)) {
        $_SESSION['used_email']="Email is already Registered";
        header('location:../../register.php');
        exit;
    }
    $str = "insert into tbl_user(u_name,u_email,u_pass,u_city,u_district,u_gender,u_dob) values('$name','$email','$pass','$city','$district','$gender','$dob')";
    if($con->query($str)==TRUE){
                $_SESSION['email'] = $email;
                $_SESSION['password']=$pass;
                $_SESSION['name']=$name;
                $_SESSION['gender']=$gender;
                $_SESSION['city']=$city;
                $_SESSION['district']=$district;
                $_SESSION['dob']=$dob;
                header('location:../../login.php');
            }
}

function isEmailRegistered($conn, $email) {
    require "dbconn.inc.php";
    $sql = "SELECT u_email FROM tbl_user WHERE u_email = '$email'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

function cleanInput($input){
    return preg_replace('/ {2,}/', ' ', trim($input));
}
