const inputError = document.getElementById('input-error');
const submitBtn = document.getElementById('dest-submit');
const submitForm = document.getElementById('dest-suggest-form');

const serviceInput = document.getElementById('dest-services');
const typeInput = document.getElementById('dest-type');
const addressInput = document.getElementById('dest-address');
const phoneInput = document.getElementById('dest-phone');
const emailInput = document.getElementById('dest-email');
const websiteInput = document.getElementById('dest-website');


if(serviceInput===null){//if it is place suggestion page it does not have service field input
    var inputArray = new Array(typeInput, addressInput, phoneInput, emailInput,websiteInput);

}else{
    var inputArray = new Array(serviceInput, typeInput, addressInput, phoneInput, emailInput,websiteInput);
}

console.log(inputArray);

var error = {};
error['validMessage'] = " ";
function validateServices(text) {
    var regex = /^[a-zA-Z\s,]+$/;//only accept ',' and text
    if (text == "") {
        delete error['serviceError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
    else if (!regex.test(text)) {
        error['serviceError'] = "**Invalid service input <br>(It mustn't contain numbers & special chars except ','.) ";
        inputError.innerHTML = objLastError(error);

        return false;
    } else {
        delete error['serviceError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
}

function validateType(text) {
    var regex = /^[a-zA-Z\s]+$/;//only accept text
    if (text == "") {
        delete error['typeError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
    else if (!regex.test(text)) {
        error['typeError'] = "**Invalid type input <br>(It mustn't contain numbers & special chars.) ";
        inputError.innerHTML = objLastError(error);

        return false;
    } else {
        delete error['typeError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
}


function validateAddress(text) {
    var regex = /^[a-zA-Z0-9\s\.,#-]+$/;//can accept space, periods, comma, hash and hyphen and
    if (text == "") {
        delete error['addressError'];


        inputError.innerHTML = objLastError(error);
        return true;
    }
    else if (!regex.test(text)) {
        error['addressError'] = "**Invalid Address input <br>(It mustn't contain special chars except (' '/','/'.'/'#'/'-'). ";
        inputError.innerHTML = objLastError(error);

        return false;
    } else {
        delete error['addressError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
}
function validatePhone(text) {
    var regex = /^(?:\+977|0)[1-9]\d{9}$/;
    /*
    The phone number must start with either the country code "+977" or a leading "0".
    The first digit following the country code or leading "0" must be a non-zero digit (1-9).
    The remaining eight digits must be numeric.
    */

    if (text == "") {
        delete error['phoneError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
    else if (!regex.test(text)) {
        error['phoneError'] = "**Invalid phone number <br>( Please enter a valid phone number for Nepal.";
        inputError.innerHTML = objLastError(error);

        return false;
    } else {
        delete error['phoneError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
}
function validateEmail(text) {
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (text == "") {
        delete error['emailError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
    else if (!regex.test(text)) {
        error['emailError'] = "**Invalid email address <br>( Please enter a valid email address.";
        inputError.innerHTML = objLastError(error);

        return false;
    } else {
        delete error['emailError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
}
function validateWebsite(text) {
    var regex = /^(?:https?:\/\/).*\.[a-zA-Z]{2,}$/;
    if (text == "") {
        delete error['websiteError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
    else if (!regex.test(text)) {
        error['websiteError'] = '**Invalid website url <br>( It must be in the format of "http(s)://example.com"';

        inputError.innerHTML = objLastError(error);
        return false;
    } else {
        delete error['websiteError'];

        inputError.innerHTML = objLastError(error);
        return true;
    }
}

inputArray.forEach(function (inputElement) {

    inputElement.addEventListener('keyup', function () {
        var formValid;
        keys = Object.keys(error);

        formValid = (keys.length === 1) ? true : false;

        console.log(formValid);

        submitBtn.disabled = !formValid;
    });
});

// takes in the error object and returns the value of the last key
function objLastError(error) {
    var errorKeys = Object.keys(error);
    var lastErrorKey = errorKeys[errorKeys.length - 1];
    var lastError = error[lastErrorKey];
    return lastError;
}