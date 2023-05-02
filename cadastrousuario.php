<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>

        <link rel="stylesheet" href="/css/cadastro.css">

    </head>

    <body>
        <nav class="menu">
            <img src="/img/LOGO%20-%20ALLCARD.png" alt="logo allcard">
            <button id="back">Voltar</button>
        </nav>

        <main class="container">
            <form action="addUsuario.php" method="POST" id="form">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">

                <input type="submit" value="Cadastrar" id="btn-cadastro">
            </form>
        </main>

        <script src="./js/back.js"></script>
    </body>

</html>