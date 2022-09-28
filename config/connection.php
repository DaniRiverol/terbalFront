<?php


$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'terbal';
$db_port = 3306;
$db_socket = '/Applications/MAMP/tmp/mysql/mysql.sock';

$mysqli = mysqli_connect($db_host,$db_user,$db_password,$db_db,$db_port,$db_socket);
if($mysqli){
   // echo "Conexión exitosa";
}