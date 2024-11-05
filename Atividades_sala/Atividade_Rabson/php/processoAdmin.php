<?php
session_start();
include('conexao.php');

$nome = $conn->real_escape_string($_POST['nome']);
$user = $conn->real_escape_string($_POST['user']);
$senha = $conn->real_escape_string($_POST['senha']);

$sql = "INSERT INTO `admin`
(`user`, `nome`, `senha` )
VALUES
('" . $user . "', '" . $nome . "','" . hash('sha256', $senha) . "')";


$resultado = $conn->query($sql);

$conn->close();
header('location: index.php.php', true, 301);
exit();
