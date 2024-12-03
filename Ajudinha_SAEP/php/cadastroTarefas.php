<?php
include_once("conexao.php");
session_start();

$descricao = $conn->real_escape_string($_POST['descricao']);
$exercicio= $conn->real_escape_string($_POST['exercicio']);
$tur1= $conn->real_escape_string($_POST['tur1']);
$tur2= $conn->real_escape_string($_POST['tur2']);
$tur3= $conn->real_escape_string($_POST['tur3']);
$tur4= $conn->real_escape_string($_POST['tur4']);
$tur5= $conn->real_escape_string($_POST['tur5']);
$tur6= $conn->real_escape_string($_POST['tur6']);


$sql = "INSERT INTO turmas
(descricao,exercicio,tur1,tur2,tur3,tur4,tur5,tur6) 
VALUES 
('" . $descricao . "','" . $exercicio . "','" . $tur1 . "','" . $tur2 . "','" . $tur3 . "','" . $tur4 . "','" . $tur5 . "','" . $tur6 . "')";


$resultado = $conn->query($sql);
$conn->close();
header('location:../paginas/cadastroTarefas.php', true, 301);
exit();
