<?php
session_start();
if(isset($_SESSION['admin_email'])){
    header('Location:admin_dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="assets/style/login_style.css">
  <link rel="stylesheet" href="assets/style/noti.css">
</head>

<body>
  <nav class="nav_admin">
    <img src="assets/img/logo.png" alt="">
  </nav>

  <div class="login_container">
    <?php
        if (isset($_SESSION['!admin_pass_match']))
            {
                echo "<div id='noti'>" . $_SESSION['!admin_pass_match'] . "</div>";
                unset($_SESSION['!admin_pass_match']);
            }
            elseif(isset( $_SESSION['admin_err'])){
                echo "<div id='noti'>" .  $_SESSION['admin_err'] . "</div>";
                unset( $_SESSION['admin_err']);
            }
            elseif(isset($_SESSION['admin_login'])){
              echo "<div id='noti'>" .  $_SESSION['admin_login'] . "</div>";
      unset($_SESSION['admin_login']);
            }

        ?>
    <fieldset>
    <legend><h1>Admin Login</h1></legend>
      <form action="config/check_db.php" method="POST">
        <div id="login" class="form_style">
          <label for="username" class="lbl">Enter Admin Username</label>
          <input type="text" placeholder="Username" id="login_email" class="text" name="email" />
          <label for="password" class="lbl">Enter Admin Password</label>
          <input type="password" placeholder="Password" id="login_password" class="text password" name="pass" />

          <input type="submit" value="Login" id="login_btn" class="login_btn" onClick="loginvalid();" />
          <!-- <p>
              Don't have an account?
              <a href="./register.php" style="text-decoration:underline;">Register</a> yourself
            </p> -->
    </fieldset>

  </div>
  </form>
  </div>
  <script src="assets/script/noti.js"></script>
</body>

</html>