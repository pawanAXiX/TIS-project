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
    <title>Login | Traverse Nepal</title>
    <link rel="icon" href="image/TN_favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="user/style/style.css">
    <link rel="stylesheet" href="user/style/home_style.css">
    <link rel="stylesheet" href="user/style/reload_animation_style.css">
    <link rel="stylesheet" href="user/style/header_style.css">
    <link rel="stylesheet" href="user/style/login_style.css">
    <link rel="stylesheet" href="user/style/noti.css">
</head>
<body>

    <!-- Reload Animation -->
    <div id="loader-overlay">
        <img src="user/img/TN-reload-page-animation.gif" alt="Loading...">
    </div>

    <video autoplay loop muted plays-inline class="back-video">
        <source src="./image/videos/Nepal-1.mp4" type="video/mp4">
    </video>

    <header>
        <?php include "user/include/header.inc.php"; ?>
    </header>
    <?php
        if (isset($_SESSION['!login_pass_match']))
            {
                echo "<div id='noti'>" . $_SESSION['!login_pass_match'] . "</div>";
                unset($_SESSION['!login_pass_match']);
            }
            elseif(isset($_SESSION['Signed'])){
                echo "<div id='noti'>" . $_SESSION['Signed'] . "</div>";
                unset($_SESSION['Signed']);
            }
            elseif(isset($_SESSION['not_signed'])){
                echo "<div id='noti'>" . $_SESSION['not_signed'] . "</div>";
                unset($_SESSION['not_signed']);
            }

        ?>

    <div class="login_container">
        <?php include "user/include/login.inc.php"; ?>
    </div>
    <script src="user/script/noti.js"></script>
    <script src="user/script/login.js"></script>
    <script src="user/script/validation.js"></script>
    <script src="user/script/reload_animation.js"></script>

</body>
</html>