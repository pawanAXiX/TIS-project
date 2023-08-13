<?php
session_start();
if(!isset($_SESSION['uname'])){
    $_SESSION['admin_login'] = "Please login first";
    header('Location:login.php');
}
require "dbconn.inc.php";
if (isset($_GET['type']) && isset($_GET['id'])) {
    $destination = $_GET['type'];
    $id = $_GET['id'];
    $tbl = substr($destination, 0, 1);
    if ($destination == "place"||$destination == "accommodation"||$destination == "restaurant"||$destination == "cafe") {

        $qry = "Delete from tbl_" . $destination . " WHERE " . $tbl . "_id=$id";


        $result = $con->query($qry);
        if ($result == TRUE) {
            header("Location:../admin.php");
        }else{
            echo "Database Error";
        }

    }
}else{
    echo "ERROR";
}
   
?>