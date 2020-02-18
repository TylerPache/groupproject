function validateForm() {
    var isValid = true;

    //check user
    if(document.getElementById('username').value == "") {
        isValid = false;
        document.getElementById('userError').innerHTML = "Username is required";
    } else {
        document.getElementById('userError').innerHTML = "";
    }

    //check pass
    if(document.getElementById('password').value == "") {
        isValid = false;
        document.getElementById('passError').innerHTML = "Password is required";
    } else {
        document.getElementById('passError').innerHTML = "";
    }

    return isValid;
}