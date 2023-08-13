<?php 
session_start();

$_SESSION = array();//unsetting all the variables before logout session
unset($_SESSION);
session_destroy();

header("Location: index.php");


?>