<?php

define('DB_HOST', 'a353059.mysql.mchost.ru');
define('DB_USER', 'a353059_warfijin');
define('DB_PASSWORD', '0BXEkw95ME');
define('DB_NAME', 'a353059_star');

$named = $_POST ['namer1'];
$email = $_POST ['email1'];

// Create connection
$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if ($mysql->connect_error) exit ('Ошибка подключения к БД');


$mysql_query = "INSERT INTO BetaTest (name_bd, email_bd)
VALUES ('$named', '$email')";

if ($mysql->query($mysql_query) === TRUE) {
  echo "Данные отправленны";
} else {
  echo "Error: " . $mysql_query . "<br>" . $mysql->error;
}
$mysql->close();

header('Location: http://ton-retch.online');

?>