<?php
include "conectdb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM tbusuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if($result->num_rows == 1) {
        session_start();
        $_SESSION["email"] = $email;

        header("Location: home.php");
        exit();
    } else {
        $error_message = "Nome do usuário ou senha inválido.";
    }
}



?>