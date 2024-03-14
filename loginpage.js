var username = document.getElementById("email").value;
var senha = document.getElementById("password").value;

function validarLogin() {
    if (username !== "" || senha !== "") {
    return true
    }
}