<?php
session_start();

$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "sistema_banco";

$connect = new mysqli($hostname, $user, $password, $database);
if ($connect->connect_error) {
    echo "Failed to connect to MySQL: " . $connect->connect_error;
    exit();
}

$nome = $connect->real_escape_string($_POST['nome']);
$usuario = $connect->real_escape_string($_POST['usuario']);
$senha = $connect->real_escape_string($_POST['senha']);

$sql = "INSERT INTO clientes
(nome,usuario,senha) 
VALUES 
('" . $nome . "', '" . $usuario . "', '" . $senha . "')";


$resultado = $connect->query($sql);

$connect->close();
header('location:../paginas/loginCliente.php', true, 301);
exit();