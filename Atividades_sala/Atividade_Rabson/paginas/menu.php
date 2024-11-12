<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/StyleFundo.css">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/StyleMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Home</title>
</head>

<body class="fundi">
    <div class="log inline">
        <?php
        session_start();
        if (isset($_SESSION['id'])) {
            $nome = $_SESSION['nome'];
        } else {
            $nome = "Anônimo";
        }
        include_once('../php/conexao.php');
        echo '
    <div>
        <div class="perfil inline">
            <i class="bi bi-person-fill perfilButton">
            <p class="perfilNome">' . $nome . '</p>
            </i>
        </div>
    </div>';
        ?>

        <form action="../php/sair.php" method="post">
            <div>
                <button class="logout inline">
                    <i class="bi bi-box-arrow-right logoutButton">
                        <p class="logoutNome">Logout</p>
                    </i>
                </button>
            </div>
        </form>
    </div>
</body>

</html>