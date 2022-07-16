<?php

class ServidoresController{
    public static function cadastrar(){      
        
        include 'View/Modules/Servidores/CadastroServidores.php';
    }

    public static function validarCadastro(){
        include 'Model/ServidoresModel.php';

        $model = new ServidoresModel();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];

        $model->salvarServidor();

        include 'View/Modules/User/Inicio.php';
    }

    public static function listar(){   
        
        include "Model/ServidoresModel.php";   
        
        $model = new ServidoresModel();
        $model->getAllRows();

        include 'View/Modules/Servidores/ListarServidores.php';
    }

}

?>