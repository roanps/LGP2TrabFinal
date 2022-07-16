<?php 
session_start();
include 'Controller/UserController.php';
include 'Controller/VeiculosController.php';
include 'Controller/ServidoresController.php';
//include 'Controller/ReservasController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        UserController::inicial();
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
    case '/inicio':
        UserController::inicial();
    break;
    case '/sair':
        UserController::sair();
    break;

    case '/veiculos':
        VeiculosController::listar();
    break;
    case '/veiculos/cadastrar':
        VeiculosController::cadastrar();
    break;
    case '/veiculos/cadastrar/validar':
        VeiculosController::validarCadastro();
    break;

    case '/servidores':
        ServidoresController::listar();
    break;
    case '/servidores/cadastrar':
        ServidoresController::cadastrar();
    break;
    case '/servidores/cadastrar/validar':
        ServidoresController::validarCadastro();
    break;

    default:
        echo "Erro 404";
    break;
}
?>