<?php

if (isset($_SESSION['email']) && isset($_SESSION['password'])){
  $session_email=$_SESSION["email"];
  $session_pass=$_SESSION["password"];
}
else{
  $session_email="";
  $session_pass="";
}

?>

<fieldset>
  <legend>Login</legend>
  <form action="user/include/loginOKinc.php" method="POST">
    <div id="login" class="form_style">

      <!-- <p id="name_err" class="error_style"></p> -->
      <label for="email" class="lbl">Enter Your Email</label>
      <input type="email" value="<?php echo $session_email; ?>" placeholder="Enter your Email" id="login_email" class="text" name="email" onkeyup="emailvalid();"/>
      <label for="password" class="lbl">Enter your Password</label>
      <input type="password" value="<?php echo $session_pass; unset($_SESSION['password']); ?>" placeholder="Enter your password" id="login_password" class="text password" name="pass" />

      <input type="submit" value="Login" id="login_btn" class="login_btn" onClick="loginvalid();" />
      <p>
        Don't have an account?
        <a href="register.php" style="text-decoration:underline;">Register</a> yourself
      </p>

    </div>
  </form>
</fieldset>
