<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleFundo.css">
    <link rel="stylesheet" href="css/StyleIndex.css">
    <title>Login Admin</title>
</head>
<body class="fundo">
        <div class="caixaBranca">
        <form action="php/Admin.php" method="POST">
            <input type="nome" placeholder="Nome" class="caixaDeTexto" name="nome" required>
            <br>
            <input type="user" placeholder="User" class="caixaDeTexto" name="user" required>
            <br>
            <input type="password" placeholder="Senha" class="caixaDeTexto" name="senha" required>
            <br>
            <input type="submit" value="Entrar" class="botao">
            <br>
        </form>
        </div>
</body>
</html>