<?php
require "dbconn.inc.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    // $cpassword=$_POST['cpassword'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $check_email="select * from tbl_user where u_email='$email'";
    $check_email_result=$con->query($check_email);
    if($check_email_result->num_rows>0){
        echo "User is already registered";
    }
    else{
        $insert_qry="insert into tbl_user(u_name,u_email,u_pass,u_city,u_district,u_gender,u_dob) values('$name','$email','$password','$city','$district','$gender','$dob')";
        $insert_result=$con->query($insert_qry);
        if($insert_result){
           echo "200";
        }else{
            echo "404";
        }

    }
} 
?>