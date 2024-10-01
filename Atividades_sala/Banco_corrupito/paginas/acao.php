<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Clientes</title>
</head>
<body>

<form action="../php/processocadas.php" method="post" class="">

        <div class="">
          <input type="number" readonly class="form-control" id="id" placeholder="Número" name="id" value="">
          <label for="id">Número</label>
        </div>

        <div class="">
          <input type="text" class="form-control" id="nome" placeholder="Nome" required name="nome" value="">
          <label for="nome">Nome</label>
        </div>

        <div class="">
          <button type="submit" class="btn btn-success" >Salvar</button>
          <button type="button" class="btn btn-secondary" onclick="window.location.href='./list'">Cancelar</button>
        </div>

      </form>

      </body>
</html>