<?php
include 'conectdb.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tbusuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$conn->query($sql);

header("Location: index.php");
exit();

?>