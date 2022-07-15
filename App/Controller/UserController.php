<?php 

class UserController{

    public static function logar(){
        include 'View/Modules/User/Login.php';
    }

    public static function cadastrar(){      
        

        include 'View/Modules/User/Cadastro.php';
    }

    public static function validarLogin(){
        include 'Model/UserModel.php';
    }

    public static function validarCadastro(){
        include 'Model/UserModel.php';

        $model = new UserModel();

       // $model->id = $_POST['id'];
        $model->user = $_POST['user'];
        $model->senha = $_POST['senha'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];

        $model->salvarUser();
    }
}
?>