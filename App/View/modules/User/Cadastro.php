<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form method="POST" action="/cadastrar/validar">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="cpf">CPF</label>
        <input type="number" name="cpf" id="cpf">

        <button type="submit" class="botao">Cadastrar</button>
    </form>


</body>
</html>