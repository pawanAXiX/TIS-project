<?php
$con=new mysqli("localhost","root","","db_tis");//creating connection

//checking connection
if($con->connect_error){
    die("Connection failed :".$con->connect_error);
}
?>