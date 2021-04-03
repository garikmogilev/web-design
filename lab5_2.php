<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="lab5/js/comet.js" lang="javaScript"></script>
    <script src="lab5/js/logging.js" lang="javaScript"></script>
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab5/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab5/css/email.css" media="all" rel="stylesheet" type="text/css" />
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
        <button onclick="sending('lab5/CometEmail.php')">Send</button>
    </div>
</div>

<div class="container_sources">

</div>

<div class="container_messages">

</div>


</body>
</html>
