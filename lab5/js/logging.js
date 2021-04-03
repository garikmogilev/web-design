window.onload
{
    let login = false;
    let password = false;
    let request;
    let result;

    function newRequest() {

        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        } else {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }

    }

    function showPassword() {
        let show = document.getElementById("showPassword");
        show.onchange = function () {
            if (this.checked) {
                document.getElementById("password").setAttribute("type", "text");
            } else {
                document.getElementById("password").setAttribute("type", "password");
            }
        }
    }

    function checkLogin(str) {
        if (str.length < 4) {
            document.getElementById("errorInput").innerHTML = "Login must be more than 4 characters";
            document.getElementsByName("login")[0].style.borderColor = "red";
            login = false;
        } else {
            document.getElementById("errorInput").innerHTML = "";
            document.getElementsByName("login")[0].style.borderColor = "green";
            login = true;
        }
    }

    function checkPassword(str) {
        if (str.length < 8) {
            document.getElementById("errorInput").innerHTML = "Password must be more than 8 characters";
            document.getElementsByName("password")[0].style.borderColor = "red";
            password = false;
        } else {
            document.getElementById("errorInput").innerHTML = "";
            document.getElementsByName("password")[0].style.borderColor = "green";
            password = true;
        }
    }

    function register() {
        if (login && password) {
            let valueLogin = document.getElementsByName("login")[0].value;
            let valuePass = document.getElementsByName("password")[0].value;
            newRequest();
            request.open("get", "lab5/register.php?login=" + valueLogin + "&password=" + valuePass, false);
            request.send(null);
            result = request.responseText;
            document.getElementById("errorInput").innerHTML = result;
        }
    }

    function logIn() {
        if (login && password) {
            let valueLogin = document.getElementsByName("login")[0].value;
            let valuePass = document.getElementsByName("password")[0].value;
            newRequest();
            request.open("get", "lab5/login.php?login=" + valueLogin + "&password=" + valuePass, false);
            request.send(null);
            result = request.responseText;

            if (result === "Login successful") {
                document.getElementById("errorInput").style.color = "green";
                document.getElementById('authorization').style.display = 'none';
                document.getElementById('user').innerHTML = valueLogin;
                document.getElementById("closeSession").style.display = "block";
                document.getElementById("container_sources").style.display = "block";
                document.getElementById("container_service").style.display = "block";

                callFuncSending();
            } else {
                document.getElementById("errorInput").style.color = "red";
            }
            document.getElementById("errorInput").innerHTML = result;
        }
    }

    function closeSession(){
        newRequest();
        request.open("get", "lab5/endSession.php",false);
        request.send(null);
        document.getElementById("closeSession").style.display = "none";
        document.getElementById("container_sources").style.display = "none";
        document.getElementById("container_service").style.display = "none";
        document.getElementById("authorization").style.display = "block";
        document.getElementById("user").innerText = "no session";

    }
}