<?php
global $conn;
include "conectdb.php";

$sql = "SELECT t1.codCliente, t1.nmCliente, t2.Saldo FROM tbclientes t1 JOIN tbhistorico
        t2 ON t1.codCliente = t2.codCliente
        ORDER BY t2.Data DESC 
        LIMIT 1001";
$result = mysqli_query($conn, $sql);

?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>BMVIX - Inicial</title>

    <link rel="stylesheet" href="/css/home.css"/>

</head>

<body>
<nav class="menu">
    <img src="/img/LOGO%20-%20ALLCARD.png" alt=""/>

    <button id="btn-sair">Sair</button>

</nav>

<main class="container" style="background-color: #424242; display:flex; align-items: center; justify-content: center">
    <div>
        <table border="2" style="color: #FFFFFF; border-color: #ff4000; margin-top: 20px; font-size: 20px; font-weight: bold">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Saldo</td>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["codCliente"] . "</td><td>" . $row["nmCliente"] . "</td><td>" . $row["Saldo"] . "</td></tr>";
            }
            ?>
        </table>
    </div>
</main>


<script src="./js/logout.js"></script>
</body>

</html>