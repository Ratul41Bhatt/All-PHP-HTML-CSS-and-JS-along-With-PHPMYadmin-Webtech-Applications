// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var fname = document.signupForm.fname.value;
    var lname = document.signupForm.lname.value;
    var email = document.signupForm.email.value;
    var password = document.signupForm.password.value;
    var country = document.signupForm.country.value;
    var gender = document.signupForm.gender.value;

    // Defining error variables with a default value
    var fnameErr = lnameErr = emailErr = countryErr = genderErr = true;

    // Validate first name
    if (fname == "") {
        printError("fnameErr", "Please enter your first name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(fname) === false) {
            printError("fnameErr", "Please enter a valid first name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }

    // Validate last name
    if (lname == "") {
        printError("lnameErr", "Please enter your last name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(lname) === false) {
            printError("lnameErr", "Please enter a valid last name");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }

    // Validate email address
    if (email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Validate password
    if (password == "") {
        printError("passwordErr", "Please enter your email address");
    } else {
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (regex.test(password) === false) {
            printError("passwordErr", "Password should contain at least one number, one uppercase character and one special character");
        } else {
            printError("passwordErr", "");
            passwordErr = false;
        }
    }

    // Validate country
    if (country == "Select") {
        printError("countryErr", "Please select your country");
    } else {
        printError("countryErr", "");
        countryErr = false;
    }

    // Validate gender
    if (gender == "Select") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }

    // Prevent the form from being submitted if there are any errors
    if ((fnameErr || lnameErr || emailErr || passwordErr || countryErr || genderErr) == true) {
        return false;
    } else {
      alert('Thank You for Registration & You are Redirecting to Website');

    }
};
