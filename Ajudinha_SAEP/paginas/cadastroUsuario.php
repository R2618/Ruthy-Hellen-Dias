<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="">
        <form action="../php/cadastroUsuario.php" method="POST">
            <input type="name" placeholder="Nome" class="caixaDeTexto" name="nome" required>
            <br>
            <input type="email" placeholder="Email" class="caixaDeTexto" name="email" required>
            <br>
            <input type="password" placeholder="Senha" class="caixaDeTexto" name="senha" required>
            <br>
            <input type="submit" value="Entrar" class="botao">
            <br>
        </form>
</body>
</html>