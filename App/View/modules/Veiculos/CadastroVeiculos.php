<?php 
    include 'View/assets/header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veiculos</title>
</head>
<body>
    <form method="POST" action="/veiculos/cadastrar/validar">
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa">

        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo">

        <button type="submit" class="botao">Cadastrar Veiculo</button>
    </form>


</body>
</html>