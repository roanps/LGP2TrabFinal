<?php 
    include 'View/assets/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Reservas</title>
</head>
<body>
<table>
        <tr>
            <th>Id</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Nome Servidor</th>
            <th>Placa Veiculo</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="/reservas/cadastrar">Cadastrar Nova Reserva</a>
</body>
</html>