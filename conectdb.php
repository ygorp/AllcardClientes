<?php
$hostname = "localhost";
$username = "root";
$password = "159753bm";
$database = "allcardclientes";
$port = 3306;


$conn = mysqli_connect($hostname, $username, $password, $database, $port);


if (!$conn) {
    die("Erro de conexão: ".mysqli_connect_error());
}
?>