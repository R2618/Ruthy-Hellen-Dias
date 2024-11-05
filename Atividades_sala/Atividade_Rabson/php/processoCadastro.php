<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "Jogo_Rabson";

$connect = new mysqli($hostname, $user, $password, $database);
if ($connect->connect_error) {
    echo "Failed to connect to MySQL: " . $connect->connect_error;
    exit();
}

$id = $connect->real_escape_string($_POST['id']);
$nome = $connect->real_escape_string($_POST['nome']);
$usuario = $connect->real_escape_string($_POST['usuario']);
$senha = $connect->real_escape_string($_POST['senha']);

$sql = "INSERT INTO admin
(id,nome,usuario,senha) 
VALUES 
('" . $id . "', '" . $nome . "','" . $usuario . "', '" . $senha . "')";


$resultado = $connect->query($sql);

$connect->close();
header('location:../paginas/acao.php', true, 301);
exit();