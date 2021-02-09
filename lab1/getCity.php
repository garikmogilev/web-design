<?php
/*данные для входа в Ane4kaBD*/
$hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'suntur';
/***************************/

//обработка ошибок реализованная в php7
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//подключение к БД
$mysqli = new mysqli($hostname, $db_username, $db_password,$db_name);

$city = $_GET['city'] ?? '-';
$city2 = "";
$city = mb_strtolower($city);
$bd = 'SELECT * FROM places';
$rows = $mysqli->query($bd);
$any = true;

for ($i = 0;$row = mysqli_fetch_assoc($rows);$i++){
    $city2 = mb_strtolower($row['city']);
    if(!strncmp($city,$city2,strlen($city)) && strlen($city)!= 0)
    {
        if($any){
            $any = false;
        }
        print "<option>{$row['city']}</option>";
    }
    else{
        echo "";
    }
}

?>
