<?php $query = $conn->query("SELECT Id_usuario, nome FROM escolas_ds where usuario = 1 and ativo = 1"); ?>
<select>
    <?php while($reg = $query->fetch_array()) { ?>
        <option value="<?php echo $reg['Id_usuario']; ?>">
            <?php echo $reg['nome']; ?>
        </option>
    <?php } ?>