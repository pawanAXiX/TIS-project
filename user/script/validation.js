const nameError = document.getElementById("name_err");
const emailError = document.getElementById("email_err");
const passError = document.getElementById("pass_err");
const cpassError = document.getElementById("cpass_err");
const cityError = document.getElementById("city_err");
const districtError = document.getElementById("district_err");

const regBtn = document.getElementById("reg_btn");

var errorArray= new Array(nameError,emailError,passError,cpassError,cityError,districtError);
console.log(errorArray);

function namevalid() {
  var name = document.getElementById("name").value;
  const name_regex = /^[a-zA-Z\s]+$/;
  if (!name_regex.test(name)) {
    document.getElementById("name_err").innerHTML =
      "**Invalid Name <br> (Your name must contains a-z, A-Z only)";
  } else document.getElementById("name_err").innerHTML = "";
}

function emailvalid() {
  var email = document.getElementById("reg_email").value;
  const email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!email_regex.test(email)) {
    document.getElementById("email_err").innerHTML =
      '**Invalid email <br> (Email must be in format of "email@example.com").';
  } else document.getElementById("email_err").innerHTML = "";
}

function passvalid() {
  var pass = document.getElementById("reg_password").value;
  var pass_regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/;
  if (/\s+/g.test(pass)) {
    document.getElementById("pass_err").innerHTML =
      "**Invalid password format <br> (Password shouldn't contain whitespaces)";
  } else if (!pass_regex.test(pass)) {
    document.getElementById("pass_err").innerHTML =
      "**Invalid password format <br> (Password should contain atleast one number <br> and one special character)";
  } else {
    if (pass.length < 8) {
      document.getElementById("pass_err").innerHTML =
        "**Invalid password format <br> (Password must be atleast 8 characters)";
    } else if (pass.length > 16) {
      document.getElementById("pass_err").innerHTML =
        "**Invalid password format <br> (Password must be atmost 16 characters)";
    } else document.getElementById("pass_err").innerHTML = "";
  }
}

function cpassvalid() {
  var pass = document.getElementById("reg_password").value;
  var cpass = document.getElementById("reg_cpassword").value;
  if (!(cpass == pass)) {
    document.getElementById("cpass_err").innerHTML =
      "Invalid password <br> (Password must match.)";
  } else {
    document.getElementById("cpass_err").innerHTML = "";
  }
}


dobvalid();//calling dobvalid(); function when the page reloads
function dobvalid() {
  var current_date = new Date();
  var current_day = current_date.getDate();
  var current_month = current_date.getMonth() + 1; //month starts with 0
  var current_year = current_date.getFullYear();

  console.log(current_year + "-" + current_month + "-" + current_day);
  document.getElementById("reg_date").value = dateFormat(
    current_day,
    current_month,
    current_year - 13
  );
  document.getElementById("reg_date").max = dateFormat(
    current_day,
    current_month,
    current_year - 13
  );
  document.getElementById("reg_date").min = dateFormat(
    current_day,
    current_month,
    current_year - 100
  );

  function dateFormat(current_day, current_month, current_year) {
    return [
      current_year,
      current_month.toString().padStart(2, "0"), //The padTo2Digits function takes care of adding a leading zero if
      current_day.toString().padStart(2, "0"), // the values for the month or day of the month are a single digit (are less than 10).
    ].join("-");
  }
}

function city_addressvalid() {
  var city = document.getElementById("address_city").value;
  const city_regex = /^[A-Za-z0-9'\.\-\s\,]+$/g;
  if (!city_regex.test(city)) {
    document.getElementById("city_err").innerHTML =
      "**Invalid city address format <br>(City address only contains [a-z,A-Z,0-9,'.','-',',']";
  } else {
    document.getElementById("city_err").innerHTML = "";
  }
}
function district_addressvalid() {
  var district = document.getElementById("address_district").value;
  const district_regex = /^[A-Za-z]+$/g;
  if (!district_regex.test(district)) {
    document.getElementById("district_err").innerHTML =
      "**Invalid district address format <br>(District address only contains [a-z,A-Z])";
  } else {
    document.getElementById("district_err").innerHTML = "";
  }
}


const inputs = document.querySelectorAll(
  "#name, #reg_email, #reg_password, #reg_cpassword, #address_city, #address_district"
);

inputs.forEach(function (inputElement) {

  inputElement.addEventListener("keyup", function () {

    var formError = isError(); 
    var formValid = !formError;

    console.log(formValid);

    regBtn.disabled = !formValid;
  });
});

// checks if any of the error elements are empty or not
function isError(){
  var errorCount=0;
  errorArray.forEach(function(errorElement){
    console.log(errorElement.innerHTML);
    if(errorElement.innerHTML !=""){
      console.log("true");
      errorCount++;
    }
    else{
      console.log("false");
    }
  });
  console.log(errorCount);
  return (errorCount > 0)? true : false;
}