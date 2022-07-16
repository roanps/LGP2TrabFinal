<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuario</title>
</head>
<body>
    <form method="POST" action="/login/validar">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <input type="checkbox" class="checkbox" name="lembrar" id="lembrar">
        <label for="lembrar">Lembrar de mim</label>
        
        <button type="submit" class="botao">Entrar</button>
    </form>
    <a href="/cadastrar">Cadastrar Novo Usuario</a>
</body>
</html>