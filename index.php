<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AllcardClientes - Login</title>

    <link rel="stylesheet" href="/css/login.css" />
  </head>
  <body>
    <main class="container">
      <form method="POST" action="login.php">
        <div class="img">
          <img src="/img/LOGO - ALLCARD.png" alt="" />
        </div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required />
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required />
        <div class="link">
          <a href="cadastrousuario.php" class="cadastrar">Cadastre-se</a>
          -
          <a href="" class="esqueci-senha">Esqueceu sua senha?</a>
        </div>

        <input type="submit" value="Entrar" id="btn-login" />
      </form>
    </main>
  </body>
</html>