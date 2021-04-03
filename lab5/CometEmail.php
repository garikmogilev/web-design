<?php

$hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'users';

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//подключение к БД
$mysqli = new mysqli($hostname, $db_username, $db_password, $db_name);

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
session_start();

$login = $_SESSION["id"];

//variables
$arrayResults = array();
$messages = 'SELECT user.login,messages.message,messages.sender
       FROM users.user
inner join users.messages on user.login = messages.login';

$rows = $mysqli->query($messages);


for ($i = 0; $row = mysqli_fetch_assoc($rows); $i++) {
    if ($login == $row['login']) {
        $arrayResults[] = json_encode($row);
    }
}

foreach ($arrayResults as $r){
    print $r."|";
}


