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
        
        $model = new UserModel();

        $model->user = $_POST['user'];
        $model->senha = $_POST['senha'];

        //chama a função logar no model, tendo antes passado para o model o user e a senha digitados
        $model->logar();
        if($model){
             include 'View/Modules/User/Inicio.php';
        }else{
            echo 'deu ruim';
        }
    }

    public static function validarCadastro(){
        include 'Model/UserModel.php';

        $model = new UserModel();

        $model->user = $_POST['user'];
        $model->senha = $_POST['senha'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];

        $model->salvarUser();
    }

    public static function inicial(){
        include 'View/Modules/User/Inicio.php';
    } 

    public static function sair(){
        session_destroy();
        setcookie('userCookie');
        include 'View/Modules/User/Login.php';
    }
}
?>