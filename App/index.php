<?php 

include 'Controller/UserController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        UserController::logar();
    break;
    case '/login':
        UserController::logar();
    break;
    case '/login/validar':
        UserController::validarLogin();
    break;
    case '/cadastrar':
        UserController::cadastrar();
    break;
    case '/cadastrar/validar':
        UserController::validarCadastro();
    break;
    default:
        echo "Erro 404";
    break;
}
?>