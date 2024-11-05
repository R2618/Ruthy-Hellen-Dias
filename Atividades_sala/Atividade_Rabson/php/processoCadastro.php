<?php
include_once("conexao.php");
session_start();
if (isset($_POST['user']) && isset($_POST['senha'])) {
    $email = $conn->real_escape_string($_POST['user']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql = "SELECT `id`, `user`, `nome` FROM `admin` WHERE `user` = ? AND `senha` = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows != 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['nome'] = $row['nome'];
            $conn->close();

            header('Location: ../paginas/pagina1.php');
            exit();
        } else {
            $_SESSION['msg_error'] = "Erro! O email ou senha estão incorretos!";
            header('Location: ../index.php');
            exit();
        }
    }
}