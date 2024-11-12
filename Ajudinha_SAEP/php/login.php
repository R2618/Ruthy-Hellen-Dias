<?php
include_once("conexao.php");
session_start();

$email= $conn->real_escape_string($_POST['email']);
$senha = $conn->real_escape_string($_POST['senha']);

$sql = "INSERT INTO login
(email,senha) 
VALUES 
('" . $email . "', '" . $senha . "')";


$resultado = $conn->query($sql);

$conn->close();
header('location:../paginas/cadastroUsuario.php', true, 301);
exit();

