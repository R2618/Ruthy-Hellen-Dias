<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/styleFundo.css">
    <title>Login</title>
</head>

<body class="fundoIndex">

<h2 class="fraseLogin">Faça seu login como Gerente:</h2>
    <div class="divLogin1">
        <form action="php/loginGerente.php" method="POST">
            <input type="email" placeholder="email" class="caixaDeTexto" name="email" required>
            <br>
            <input type="password" placeholder="senha" class="caixaDeTexto" name="senha" required>
            <br>
            <input type="submit" value="Entrar" class="botao">
            <br>
        </form>
    </div>
    <div class="login">
        <p class="email">O Email é "sim@nao"</p>
        <p class="senha">A Senha é "1234"</p>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['msg_error']) && $_SESSION['msg_error'] != '') {
        echo "<div class='caixaDeErro'>
                <span class='seta'></span>
                <p>" . $_SESSION['msg_error'] . "</p>
              </div>";
        unset($_SESSION['msg_error']);
    }
    ?>

</body>

</html>