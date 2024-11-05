<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body class="">
        <form action="php/processoAdmin.php" method="POST">
            <input type="nome" placeholder="nome" class="" name="nome" required>
            <br>
            <input type="user" placeholder="user" class="caixaDeTexto" name="user" required>
            <br>
            <input type="password" placeholder="senha" class="caixaDeTexto" name="senha" required>
            <br>
            <input type="submit" value="Entrar" class="botao">
            <br>
        </form>
</body>
</html>