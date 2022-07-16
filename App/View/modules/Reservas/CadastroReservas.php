<?php 
    include 'View/assets/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Reservas</title>
</head>
<body>
    <form method="POST" action="/servidores/cadastrar/validar">
        <label for="data">Data Reservada</label>
        <input type="date" name="data" id="data">

        <label for="desc">Descrição</label>
        <input type="text" name="desc" id="desc">

        <label for="servidor">Servidor</label>
        <select name="servidor">
            <option value="Selecione" selected>Selecione...</option>
            <?php foreach($model->rowsServidoresNomes as $item): ?>
            <option value="<?= $item->id?>">
                <?= $item->nome?>
            </option>
            <?php endforeach ?>
        </select>

        <label for="servidor">Veiculo</label>
        <select name="servidor">
            <option value="Selecione" selected>Selecione...</option>
            <?php foreach($model->rowsServidoresNomes as $item): ?>
            <option value="<?= $item->id?>">
                <?= $item->nome?>
            </option>
            <?php endforeach ?>
        </select>
        <button type="submit" class="botao">Cadastrar Reserva</button>

        
    </form>
</body>
</html>