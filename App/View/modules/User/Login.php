<?php 

if(isset($_SESSION['erro'])){
    $erro = $_SESSION['erro'];
    unset($_SESSION['erro']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuario</title>
</head>
<body>
            <?php if(isset($erro)) : ?>
                <h2>Erro:<?= $erro ?></h2>       
            <?php endif ?>
           
    <form method="POST" action="/login/validar">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <button type="submit" class="botao">Entrar</button>
    </form>
    <a href="/cadastrar">Cadastrar Novo Usuario</a>
</body>
</html>