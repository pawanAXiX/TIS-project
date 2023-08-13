<?php
session_start();
$user_email=$_SESSION['email'];
require "../include/dbconn.inc.php";

$user_id_query_exec=$con->query("SELECT u_id FROM tbl_user WHERE u_email = '$user_email';");
$user_data_row=$user_id_query_exec->fetch_assoc();
$user_id=$user_data_row['u_id'];

if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
    $dest_type=$_POST['liked-dest-type'];
    $dest_id=$_POST['liked-dest-id'];

    require "../include/dbconn.inc.php";
    $like_check_query_exec=$con->query("SELECT * FROM tbl_user_liked_trip WHERE like_user_id='".$user_id."' AND like_dest_type='".$dest_type."' AND like_dest_id='".$dest_id."';");
    $liked_record=$like_check_query_exec->fetch_assoc();
    if($like_check_query_exec->num_rows >0){
        $like_update_query_exec=$con->query("DELETE FROM tbl_user_liked_trip  WHERE like_user_id='".$user_id."' AND like_dest_type='".$dest_type."' AND like_dest_id='".$dest_id."';");
        echo "disliked";
    }
    else{
        $like_update_query_exec=$con->query("INSERT INTO tbl_user_liked_trip VALUES ('','".$user_id."','".$dest_type."','".$dest_id."');");
        echo "liked";   
    }
}


?>