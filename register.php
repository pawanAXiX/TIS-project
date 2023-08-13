<?php
session_start();
if(isset($_SESSION['email'])){
    header("Location:search.php");
}

require "user/include/dbconn.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register | Traverse Nepal</title>
    <link rel="icon" href="image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="user/style/header_style.css">
    <link rel="stylesheet" href="user/style/home_style.css">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="user/style/register_style.css">
    <link rel="stylesheet" href="user/style/noti.css">

    <script src="user/script/jquery.js"></script>
</head>

<body>
    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="user/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>

    <video autoplay loop muted plays-inline class="back-video">
        <source src="./image/videos/Nepal-3.mp4" type="video/mp4">
    </video>

    <?php include "user/include/header.inc.php"; ?>
    <?php
    if (isset($_SESSION['login_err'])) {
        echo "<div id='noti'>" . $_SESSION['login_err'] . "</div>";
        unset($_SESSION['login_err']);
    } else if (isset($_SESSION['used_email'])) {
        echo "<div id='noti'>" . $_SESSION['used_email'] . "</div>";
        unset($_SESSION['used_email']);
    }

    ?>

    <div class="register_container">
        <?php include "user/include/register.inc.php"; ?>
    </div>
    <script src="user/script/validation.js"></script>
    <script src="user/script/noti.js"></script>
    <script src="user/script/register.js"></script>
    <script src="user/script/reload_animation.js"></script>
</body>

</html>