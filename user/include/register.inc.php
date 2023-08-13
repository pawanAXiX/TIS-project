<fieldset>
  <legend>Register</legend>
  <form action="user/include/registerOK.php" method="POST">
    <div id="register" class="form_style">

      <label for="name" class="lbl">Enter Your Name :</label>
      <input type="text" id="name" class="text" placeholder="Enter your name" onkeyup="namevalid()" name="name" required />
      <p id="name_err" class="error_style"></p>

      <label for="email" class="lbl">Enter Your Email :</label>
      <input type="email" name="email" placeholder="Enter your Email" id="reg_email" class="text" onkeyup="emailvalid();" required />
      <p id="email_err" class="error_style"></p>

      <label for="password" class="lbl">Enter a Password :</label>
      <input type="password" placeholder="Enter your password" id="reg_password" class="text password" name="pass"
        onkeyup="passvalid();" required />
      <p id="pass_err" class="error_style"></p>

      <label for="cpassword" class="lbl">Confirm Password :</label>
      <input type="password" placeholder="Confirm Password" id="reg_cpassword" class="text password"
        onkeyup="cpassvalid()" required />
      <p id="cpass_err" class="error_style"></p>

      <div class="address">
        <label for="address">Address :</label>
        <div class="address_options">
          <span class="addr_city">
            <input type="text" placeholder="Enter your city" id="address_city" class="text" onkeyup="city_addressvalid()" name="city" required />
          </span>
          <span><input type="text" placeholder="Enter your district" id="address_district" class="text" onkeyup="district_addressvalid()" name="district"
              required /></span>
        </div>
        <p id="city_err" class="error_style"></p>
        <p id="district_err" class="error_style"></p>
      </div>

      <div class="gender">
        <label>Choose Your Gender :</label>
        <div class="gender_options">
          
          <i><input type="radio" name="gender" id="reg_gender_male" value="Male"><span>Male</span></i>
          <i><input type="radio" name="gender" id="reg_gender_female" value="Female"><span>Female</span></i>
          <i><input type="radio" name="gender" id="reg_gender_others" value="Others" required><span>Others</span></i>
          
        </div>
      </div>

      <div class="reg_dob">
        <label>Date of Birth :</label>
        <input type="date" name="reg_date" id="reg_date" required />
      </div>


      <input type="submit" value="Register" id="reg_btn" class="register_btn" disabled />
      <p>

        Have an Account already? Login in <a href="login.php" style="text-decoration:underline;">here</a>
      </p>
    </div>
  </form>
</fieldset>
</div>
</div>