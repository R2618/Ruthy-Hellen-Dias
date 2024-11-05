<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <div>
        <form action="../php/CadastrarUsuario.php" method="POST">
            <input type="name" name="nome" class="" placeholder="Insira o nome do usuário: " required>
            <br>
            <input type="email" name="email" class="" placeholder="Insira seu email: " required>
            <br>
            <input type="password" name="senha" class="" placeholder="Insira uma senha: " required>
            <br>
            <input type="submit" value="Cadastrar" class="">
        </form>
    </div>
</body>
</html>