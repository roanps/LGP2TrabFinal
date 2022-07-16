<?php 
    include 'View/assets/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Veiculos</title>
</head>
<body>

    <table>
        <tr>
            <th>Id</th>
            <th>Placa</th>
            <th>Modelo</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->placa ?></td>
            <td><?= $item->modelo ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="/veiculos/cadastrar">Cadastrar Novo Veiculo</a>
</body>
</html>