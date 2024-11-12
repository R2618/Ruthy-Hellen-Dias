<?php
include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['nome']) && !empty($dados['email']) && !empty($dados['senha'])) {
    $query_clientes = "INSERT INTO clientes (nome, email, senha) VALUES (?, ?, ?)";
    $cad_usuario = $conn->prepare($query_clientes);
    
    $cad_usuario->bind_param('sss', $dados['nome'], $dados['email'], $dados['senha']);
    $cad_usuario->execute();

    if ($cad_usuario->affected_rows > 0) {
        header("Location: ../paginas/paginaLogin.php");
        exit;
    } else {
        echo "erro";
    }
}

$conn->close();