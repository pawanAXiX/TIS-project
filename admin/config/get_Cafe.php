<?php
require "config/dbconn.inc.php";
$str="select * from tbl_cafe where c_id=".$_GET['id'];
$res = $con->query($str);
?>