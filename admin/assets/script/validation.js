function namevalid() {
  var name = document.getElementById("name").value;
  name_regex = /^[a-zA-Z\s]+$/;
  if (!name_regex.test(name)) {
    document.getElementById("name_err").innerHTML =
      "**Invalid Name <br> (Your name must contains a-z, A-Z only)";
  } else document.getElementById("name_err").innerHTML = " ";
}

function city_addressvalid() {
  var city = document.getElementById("address_city").value;
  city_regex = /^[A-Za-z0-9'\.\-\s\,]+$/g;
  if (!city_regex.test(city)) {
    document.getElementById("address_err").innerHTML =
      "**Invalid city address format <br>(City address only contains [a-z,A-Z,0-9,'.','-',',']";
  } else {
    document.getElementById("address_err").innerHTML = " ";
  }
}
function district_addressvalid() {
  var district = document.getElementById("address_district").value;
  district_regex = /^[A-Za-z\s]+$/g;
  if (!district_regex.test(district)) {
    document.getElementById("address_err").innerHTML =
      "**Invalid district address format <br>(District address only contains [a-z,A-Z])";
  } else {
    document.getElementById("address_err").innerHTML = " ";
  }
}

function checkevent() {
  const inputs = document.querySelectorAll(
    "#name, #address_city, #address_district"
  );

  let isValid = true;
  inputs.forEach((input) => {
    if (!input.value.trim()) {
      isValid = false;
      return;
    }
  });

  const btn = document.getElementById("add_btn");
  btn.disabled = !isValid;
  // if (btn.disabled == false) {
  //   accountregister();
  // }
}
