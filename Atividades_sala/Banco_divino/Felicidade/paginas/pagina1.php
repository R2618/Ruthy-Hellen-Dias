<?php
include '../php/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFundo.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/stylePagina1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listagem de Clientes</title>
</head>

<body class="fundoHome">
    <?php
    include 'menu.php';
    ?>

    <div class="container posicao">
        <div class="row mt-4">
            <div class="col-lg-12 inline finalLine align-items-center">
                <div >
                    <h1 class="text">Clientes</h1>
                </div>
                <div>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#cadUsuarioModal">
                        Cadastrar clientes
                    </button>
                    <button type='button' class='btn btn-info' data-bs-toggle='modal'
                        data-bs-target='#cadCartaoModal'>
                        Cadastrar cartões
                    </button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <span class="listar-usuarios"></span>
                    <table class="myTable table-striped">
                        <thead>
                            <tr>
                                <th class="ID">ID</th>
                                <th>Nome</th>
                                <th class="acoes">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../php/listagem.php';
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-bonito">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="cadUsuarioModalLabel">Cadastrar Clientes</h1>
                    </div>
                    <div class="modal-body">
                        <form action="../php/cadastro.php" id="cad-usuario-form" method="POST">
                            <span id="msgAlerta"></span>
                            <div class="mb-3">
                                <label for="nome" class="col-form-label">Nome:</label>
                                <input type="text" name="nome" class="form-bonito" id="nome"
                                    placeholder="Digite o nome completo do cliente" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="email" name="email" class="form-bonito" id="email"
                                    placeholder="Digite o email do cliente" required>
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="col-form-label">Senha:</label>
                                <input name="senha" class="form-bonito" id="senha"
                                    placeholder="Digite a senha do cliente" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-bs-dismiss="modal">Fechar</button>
                                <input type="submit" class="btn btn-primary btn-sm" id="cad-usuario-btn"
                                    value="Cadastrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='cadCartaoModal' tabindex='-1' aria-labelledby='cadCartaoModal' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-bonito'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='cadCartaoModalLabel'>Cadastrar Cartões</h1>
                    </div>
                    <div class='modal-body'>
                        <form action='../php/cadastroCartao.php' id='cad-cartao-form' method='POST'>
                            <span id='msgAlerta'></span>
                            <div class='mb-3'>
                                <label for='endereco' class='col-form-label'>Selecione um usuário:</label>
                                <select name="gerente_id" class="col-form-select" required>
                                    <option value="" class="col-form-option" disabled selected>Clique aqui para
                                        selecionar</option>
                                    <?php
                                    include '../php/conexao.php';

                                    $sql = "SELECT id, nome FROM clientes";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . " (ID: " . $row['id'] . ")</option>";
                                        }
                                    }

                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                            <div class='mb-3'>
                                <label for='endereco' class='col-form-label'>Endereço:</label>
                                <input type='text' name='endereco' class='form-bonito' id='endereco'
                                    placeholder='Digite o endereço do seu cliente' required>
                            </div>
                            <div class='mb-3'>
                                <label for='cartao' class='col-form-label'>Número do cartão:</label>
                                <input type='text' name='cartao' class='form-bonito' id='cartao'
                                    placeholder='Digite o número do cartão de crédito do seu cliente' required>
                            </div>
                            <div class='modal-footer'>
                                <button type='button' class='btn btn-secondary btn-sm'
                                    data-bs-dismiss='modal'>Fechar</button>
                                <input type='submit' class='btn btn-primary btn-sm' id='cad-usuario-btn'
                                    value='Cadastrar'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class='modal fade' id='visClienteModal' tabindex='-1' aria-labelledby='visClienteModal' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-bonito'>
                    <div class='modal-header'>
                        <h1 class='modal-title fs-5' id='visClienteModalLabel'>Dados do Cliente</h1>
                    </div>
                    <div class='modal-body'>
                        <div class="mb-3">
                            <label for="modalNome" class="col-form-label">Nome:</label>
                            <p id="modalNome"></p>
                        </div>
                        <div class="mb-3">
                            <label for="modalEmail" class="col-form-label">Email:</label>
                            <p id="modalEmail"></p>
                        </div>
                        <div class="mb-3">
                            <label for="modalSenha" class="col-form-label">Senha:</label>
                            <p id="modalSenha"></p>
                        </div>
                        <div class="mb-3">
                            <label for="modalEndereco" class="col-form-label">Endereço:</label>
                            <p id="modalEndereco"></p>
                        </div>
                        <div class="mb-3">
                            <label for="modalCartao" class="col-form-label">Cartão:</label>
                            <p id="modalCartao"></p>
                        </div>

                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary btn-sm' data-bs-dismiss='modal'>Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
        <script src="../js/scriptListagem.js"></script>
</body>

</html>