<?php 
    include 'View/assets/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1><?= $_SESSION['nome']?> está logado!</h1>
    <ul>
        <li><a href="/reservas">Listar Reservas</a></li>
        <li><a href="/reservas/cadastrar">Cadastrar Reserva</a></li>
        <li><a href="/servidores">Listar Servidores</a></li>
        <li><a href="/servidores/cadastrar">Cadastrar Servidores</a></li>
        <li><a href="/veiculos">Listar Veiculos</a></li>
        <li><a href="/veiculos/cadastrar ">Cadastrar Veiculos</a></li>
    </ul>
 
</body>
</html>