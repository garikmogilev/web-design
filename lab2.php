<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>web-design</title>
  <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
  <link href="lab2/css/style.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<header>

    <ul class="menu-main">
      <li><a href="lab1.php">Lab 1</a></li>
      <li><a href="lab2.php">Lab 2</a></li>
      <li><a href="lab3.php">Lab 3</a></li>
      <li><a href="lab4.php">Lab 4</a></li>
      <li><a href="lab5.php">Lab 5</a></li>
      <li><a href="lab6.php">Lab 6</a></li>
      <li><a href="lab7.php">Lab 7</a></li>
      <li><a href="lab8.php">Lab 8</a></li>
      <li><a href="lab9.php">Lab 9</a></li>
      <li><a href="lab10.php">Lab 10</a></li>
    </ul>

  <img class="container_header" src="img/webdesign-services-why-i-should-have-a-website-for-my-business.jpg" alt=""/>

</header>
<div id="authorization">
    <p><span class="black">LOG IN</span> <span class="gray">or</span> <span class="yellow">SIGN UP</span></p>
    <hr/>

    <p class="forms">
        <label for="login">Login &#x1F479;</label>
        <label>
            <input id="login" type="text" name="login" placeholder="Login or email" onkeyup="checkLogin(this.value)">
        </label>
    </p>

    <p class="forms">
        <label for="password">Password &#x1F511;</label>
        <input id="password" type="password" name="password" placeholder="Password" class="showPassword" onkeyup="checkPassword(this.value)">
    </p>
    <div id="serving">
        <p id="errorInput"></p>
         <p class="checkBox" >
             <label>
                <input id="showPassword" name="showPassword" type="checkbox" value="" onclick="showPassword()">
             </label>Show password
         </p>
    </div>

<div class="buttons">
    <button class="button black" onclick="register()">
        SIGN UP
    </button>

    <button class="button black" onclick="logIn()">
        LOG IN
    </button>
</div>
</div>


<footer>

</footer>
<script type="application/javascript" language="JavaScript">
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

    function showPassword()
    {
            let show = document.getElementById("showPassword");
            show.onchange = function() {

                if(this.checked) {
                    document.getElementById("password").setAttribute("type", "text");
                }else {
                    document.getElementById("password").setAttribute("type", "password");
                }
            }
    }

    function checkLogin(str)
    {
        if(str.length < 4)
        {
            document.getElementById("errorInput").innerHTML = "Login must be more than 4 characters";
            document.getElementsByName("login")[0].style.borderColor = "red";
            login = false;
        }
        else
        {
            document.getElementById("errorInput").innerHTML = "";
            document.getElementsByName("login")[0].style.borderColor = "green";
            login = true;
        }
    }
    function checkPassword(str)
    {
        if(str.length < 8)
        {
            document.getElementById("errorInput").innerHTML = "Password must be more than 8 characters";
            document.getElementsByName("password")[0].style.borderColor = "red";
            password = false;
        }
        else
        {
            document.getElementById("errorInput").innerHTML = "";
            document.getElementsByName("password")[0].style.borderColor = "green";
            password = true;
        }
    }

    function register(){
        let valueLogin = document.getElementsByName("login")[0].value;
        let valuePass = document.getElementsByName("password")[0].value;
        newRequest();
        request.open("get", "lab2/register.php?login=" + valueLogin + "&password=" + valuePass, false);
        request.send(null);
        result = request.responseText;

        document.getElementById("errorInput").innerHTML =result;
    }

    function logIn()
    {
        let valueLogin = document.getElementsByName("login")[0].value;
        let valuePass = document.getElementsByName("password")[0].value;
        newRequest();
        request.open("get", "lab2/login.php?login=" + valueLogin + "&password=" + valuePass, false);
        request.send(null);
        result = request.responseText;

        if(result === "Login seccusfull"){
            document.getElementById("errorInput").style.color = "green";
        }else {
            document.getElementById("errorInput").style.color = "red";
        }
        document.getElementById("errorInput").innerHTML = result;
    }

</script>
</body>
</html>
