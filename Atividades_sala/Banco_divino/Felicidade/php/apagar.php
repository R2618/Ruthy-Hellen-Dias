<?php
include 'conexao.php'; 

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
    $sql = "DELETE FROM `clientes` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); 

    if ($stmt->execute()) {
        $resposta = ['erro' => false, 'msg' => "Cliente excluído com sucesso!", 'reload' => true]; 
    } else {
        $resposta = ['erro' => true, 'msg' => "Cliente não foi excluído, ocorreu algum erro."];
    }

    $stmt->close(); 
} else {
    $resposta = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'> ID inválido! </div>"];
}

echo json_encode($resposta);
