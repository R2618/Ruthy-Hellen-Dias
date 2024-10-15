<?php
include_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente_id = $_POST['gerente_id'];
    $endereco = $_POST['endereco'];
    $cartao = $_POST['cartao'];

    if (!empty($cliente_id) && !empty($endereco) && !empty($cartao)) {
        $sql = "UPDATE clientes SET endereco = ?, cartao = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $endereco, $cartao, $cliente_id);
        if ($stmt->execute()) {
            header("location:../paginas/pagina1.php");
        } else {
            header("location:../paginas/pagina1.php");
        }
    } else {
        header("location:../paginas/pagina1.php");
    }
}
