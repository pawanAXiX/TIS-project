<?php
require "dbconn.inc.php";
$str = "select * from tbl_restaurant where r_id=" . $_GET['id'];
$res = $con->query($str);
?>