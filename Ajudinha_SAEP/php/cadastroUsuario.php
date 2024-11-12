<?php
include_once("conexao.php");
session_start();

$nome = $conn->real_escape_string($_POST['nome']);
$email= $conn->real_escape_string($_POST['email']);
$senha = $conn->real_escape_string($_POST['senha']);

$sql = "INSERT INTO usuario
(nome,email,senha) 
VALUES 
('" . $nome . "','" . $email . "', '" . $senha . "')";


$resultado = $conn->query($sql);

$conn->close();
header('location:../paginas/cadastroTarefas.php', true, 301);
exit();