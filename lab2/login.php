<?php
/*данные для входа */
$hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'users';

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//подключение к БД
$mysqli = new mysqli($hostname, $db_username, $db_password, $db_name);

$login = $_GET['login'] ?? '*';
$password = $_GET['password'] ?? '*';

$bd = 'SELECT * FROM users.user';
$rows = $mysqli->query($bd);

$salt = '$5$rounds=5000$anexamplestringforsalt$';   // SHA-256

$passwordCrypt = crypt($password, $salt);

for ($i = 0; $row = mysqli_fetch_assoc($rows); $i++) {
    if ($login == $row['login'] && $passwordCrypt == $row['password']) {
        exit ("Login seccusfull");
    }
}

print "Login or password incorrect";
