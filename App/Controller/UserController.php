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

        $login = "falhou";
        if(isset($_SESSION['nome'])){
            $login = "sucesso";
        }

        if($login == "sucesso"){              
            header('Location: /inicio');       
        }else{
            $_SESSION['erro'] = "Não foi possivel fazer login";
            include 'View/Modules/User/Login.php';
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

        include 'View/Modules/User/Login.php';
    }

    public static function inicial(){
        if(isset($_COOKIE["userCookie"]) || isset($_SESSION["nome"])){
            include 'View/Modules/User/Inicio.php';
        }else{
            $_SESSION['erro'] = "Precisa fazer login para acessar essa página";
            header('Location: /login');
        }
    } 

    public static function sair(){
        setcookie('userCookie');
        session_destroy();
        
        header('Location: /login');
    }
}
?>