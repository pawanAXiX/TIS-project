<?php
require "config/dbconn.inc.php";
$str="select * from tbl_place where p_id=".$_GET['id'];
$res = $con->query($str);
?>