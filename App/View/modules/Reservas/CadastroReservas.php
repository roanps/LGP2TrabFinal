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
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form method="POST" action="/reservas/cadastrar/validar">
        <label for="data">Data Reservada</label>
        <input type="date" name="data" id="data">

        <label for="desc">Descrição</label>
        <input type="text" name="desc" id="desc">

        <label for="cpf">CPF Servidor</label>
        <input type="number" name="cpf" id="cpf">

        <label for="placa">Placa Veiculo</label>
        <input type="text" name="placa" id="placa">
        
        <button type="submit" class="botao">Cadastrar Reserva</button>        
    </form>
</body>
</html>