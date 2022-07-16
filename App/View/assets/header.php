<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <header>
        <li><a href="/inicio">Home</a></li>
        <li><a href="/reservas">Reservas</a></li>
        <li><a href="/servidores">Servidores</a></li>
        <li><a href="/veiculos">Veiculos</a></li>
        <li><?= $_SESSION['nome']?></li>
        <li><a href="/sair">Sair</a></li>
    </ul>
    
    </header>
</body>
</html>