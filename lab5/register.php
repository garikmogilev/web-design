<?php

$hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'users';

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//подключение к БД
$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);

$login = $_GET['login'] ?? '*';
$password = $_GET['password'] ?? '*';

$bd = 'SELECT * FROM users.user';
$rows = $mysqli->query($bd);

for ($i = 0;$row = mysqli_fetch_assoc($rows);$i++){
    if($login == $row['login'])
    {
        exit ("Login is busy");
    }
}

$salt = '$5$rounds=5000$anexamplestringforsalt$';   // SHA-256

$passwordCrypt = crypt($password,$salt);

$mysqli->query("INSERT INTO users.user(login,password) VALUES ('$login','$passwordCrypt')");
print "You registered";
?>
