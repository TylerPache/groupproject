function validateForm() {
    var isValid = true;

    //check username
    if(document.getElementById('username').value == "") {
        isValid = false;
        document.getElementById('userError').innerHTML = "Username is required";
    } else {
        document.getElementById('userError').innerHTML = "";
    }

    //check that both passwords are entered
    if(document.getElementById('pass').value == "") {
        isValid = false;
        document.getElementById('passError').innerHTML = "Password is required";
    } else if(document.getElementById('pass2').value == "") {
        isValid = false;
        document.getElementById('pass2Error').innerHTML = "Password must be entered again";
        document.getElementById('passError').innerHTML = "";

    //check that both passwords match
    } else if(document.getElementById('pass').value != document.getElementById('pass2').value) {
        isValid = false;
        document.getElementById('pass2Error').innerHTML = "Passwords must match";
        document.getElementById('passError').innerHTML = "";
    } else {
        document.getElementById('pass2Error').innerHTML = "";
        document.getElementById('passError').innerHTML = "";
    }

    return isValid;
}