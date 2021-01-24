
function validate() {
    var getUsername = document.getElementById("txtName").value;
    var getPassword = document.getElementById("txtPassword").value;
    if (getUsername === null || getUsername === ''
            || getPassword === null || getPassword === '') {
        alert("Must complete the fields");
        return false;
    }else{
        return true;
    }
    return false;
}

