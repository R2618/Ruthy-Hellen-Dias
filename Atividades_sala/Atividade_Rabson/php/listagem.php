<?php
include_once 'conexao.php';

$sql = "SELECT id, nome, email, senha, endereco, cartao FROM `clientes` ORDER BY id DESC LIMIT 10";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->get_result();
$dados = "";

while ($row = $resultado->fetch_assoc()) {
    $id = $row['id'];
    $nome = $row['nome'];
    $email = $row['email'];
    $senha = $row['senha'];
    $endereco = $row['endereco'];
    $cartao = $row['cartao'];
    
    $dados .=   "
                <tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td> 
                        <button class='botaoExcluir' id='$id' onclick='apagar($id)'>Excluir</button>
                        <button type='button' class='botaoVisualizar' data-bs-toggle='modal' data-bs-target='#visClienteModal' 
                            onclick=\"abrir('$nome', '$email',  '$senha', '$endereco', '$cartao')\">
                            Visualizar
                        </button>
                    </td>
                </tr>
                ";
}


echo $dados;
