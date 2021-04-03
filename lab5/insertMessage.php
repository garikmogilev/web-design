<?php
$hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'users';

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//подключение к БД
$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);

$sender = $_GET['sender'];
$message = $_GET['message'];
$user = $_GET['user'];

$mysqli->query("insert into users.messages(login, message,statusRead, sender) 
    VALUES ('$sender','$message',0,'$user')");

echo "Message sent" ;