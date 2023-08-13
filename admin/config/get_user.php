<?php
require "include/dbconn.inc.php";
$str_user = "select * from tbl_user";
$res_user = $con->query($str_user);
if($res_user>0){
    $count_user = $res_user->num_rows;
}else{
    echo "error";
}
 ?>