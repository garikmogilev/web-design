<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>web-design</title>
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="lab1/css/style.css" media="all" rel="stylesheet" type="text/css" />
</head>

<?php
include("lab1/getCity.php");
?>

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

<div id = "result"></div>
<form action="lab1/script.php" method="get">
    <input onclick="getDateGet()" type="button" value="Method get" />
</form>

<form action="lab1/script.php" method="get">
    <input onclick="getDatePost()" type="button" value="Method post" />
</form>

<input type="text" id="inp" onkeyup="foundCity(this.value)">

<select id="sel" onmouseup='pasteInSelect(this.value)'>
    <option>Начните вводить и я подскажу</option>
</select>

<footer>

</footer>

<script language="JavaScript" type="application/javascript">

    let request;
    let result
    let url = "lab1/script.php";

    if (window.XMLHttpRequest) {
        request = new XMLHttpRequest();
    } else {
        request = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function getDateGet()
    {

        request.open("Get",url,true);
        request.onreadystatechange = updatePage;
        request.send(null);

    }

    function getDatePost()
    {
        alert("method post");
        request.open("post",url,true);
        request.onreadystatechange = updatePage;
        request.send(null);
    }

    function updatePage(str)
    {
        result = request.responseText;
        document.getElementById("result").textContent = result;
        alert(result);
    }

    function foundCity(str)
    {
           if(str.length === 0)
           {
               document.getElementById("sel").innerHTML = "";
           }
           else
           {
               request.open("get", "lab1/getCity.php?city=" + str, false);
               request.send(null);
               result = request.responseText;
               document.getElementById("sel").innerHTML = result;
           }
    }

    function pasteInSelect(str)
    {
        document.getElementById("inp").value = str;
    }

</script>
</body>
</html>
