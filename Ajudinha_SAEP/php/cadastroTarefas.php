<?php
include_once("conexao.php");
session_start();

$descricao = $conn->real_escape_string($_POST['descricao']);
$exercicio= $conn->real_escape_string($_POST['exercicio']);

$sql = "INSERT INTO usuario
(descricao,exercicio) 
VALUES 
('" . $descricao . "','" . $exercicio . "')";


$resultado = $conn->query($sql);
