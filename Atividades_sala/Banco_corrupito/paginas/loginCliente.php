<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<form action="../php/processologinC.php" method="POST"> 
    <input type="text" name="nome" class="Texto" size="20" placeholder="Insira seu nome: ">
    <br>
    <input type="text" name="usuario" class="Texto" size="20" placeholder="Insira seu usuario: ">
    <br>
    <input type="text" name="senha" class="Texto" size="20" placeholder="Insira sua senha: ">
    <br>
    <input type="submit" value="Enviar" class="botaou">
    </form>
    <form action=""><input type="submit" value="Sair" class="botaou"></form>
</body>
</html>