<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>web-design</title>
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab3/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <div id="result">

    </div>
    <button id="firstButton">Load text from file text.txt</button>
    <button id="secondButton">Load list(ol) from file list.html</button>
    <button id="thirdButton">Load js from file script.js</button>
    <button id="fourthButton">Load php from file script.php</button>
</header>

<footer>

</footer>
<script type="application/javascript" language="JavaScript">
    $(document).ready(function(){
        $("#firstButton").click(function(){
            $("#result").load("lab3/text.txt");
        });
        $("#secondButton").click(function(){
            $("#result").load("lab3/list.html");
        });
        $("#thirdButton").click(function(){
            $("#result").load("lab3/script.html");
        });
        $("#fourthButton").click(function(){
            $("#result").load(
                "lab3/script.php",
                {
                    param1: "Hello",
                    param2: "world"
                },
                function(){alert("Получен ответ от сервера.")}
            );
        });
    });
</script>
</body>
</html>
