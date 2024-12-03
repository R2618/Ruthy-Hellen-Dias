<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
</head>
<body>
<div class="">
    <form action="cadastroTarefas.php" method="POST">
        <div>
            <textarea id="story" name="descricao" rows="10" cols="33" placeholder="Descriçãos: "></textarea>
        </div>
        <br>
        <div>
            <textarea id="story" name="exercicio" rows="10" cols="33" placeholder="Exercício: "></textarea>
        </div>
        <br> 

        <label>Turmas</label>
        <select name="turmas">
            <option value="turma1" name="tur1">Turma1</option>
            <option value="turma2" name="tur2">Turma2</option>
            <option value="turma3" name="tur3">Turma3</option>
            <option value="turma4" name="tur4">Turma4</option>
            <option value="turma5" name="tur5">Turma5</option>
            <option value="turma6" name="tur6">Turma6</option>
        </select>

        <br>
        <div class=""><input type="submit" value="Enviar"class="botao"></div>
          
    </form>

</body>
</html>