
function validate() {
    var getUsername = document.getElementById("txtName");
    var getPassword = document.getElementById("txtPassword");
    if (getUsername === null || getUsername === ''
            || getPassword === null || getPassword === '') {
        alert("Must complete the fields");
        return false;
    }else{
        return true;
    }
    return false;
}

