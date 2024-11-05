<?php

include('conexao.php');
{
// Evita caracteres especiais (SQL Inject)
$nome = $conn -> real_escape_string($_POST['nome']);
$email = $conn -> real_escape_string($_POST['email']);
$senha = $conn -> real_escape_string($_POST['senha']);


$sql="INSERT INTO `usuarios`
(`nome`,`email`, `senha`)
VALUES
('".$nome."','".$email."', '".hash('sha256',$senha)."')";

$resultado = $conn->query($sql);

$conn -> close();
header('Location: ../Index.php', true, 301);
exit();
}
?>