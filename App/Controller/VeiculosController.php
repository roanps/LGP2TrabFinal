<?php

class VeiculosController{
    public static function cadastrar(){      
        
        include 'View/Modules/Veiculos/CadastroVeiculos.php';
    }

    public static function validarCadastro(){
        include 'Model/VeiculosModel.php';

        $model = new VeiculosModel();

        $model->placa = $_POST['placa'];
        $model->modelo = $_POST['modelo'];

        $model->salvarVeiculo();

        include 'View/Modules/User/Inicio.php';
    }

    public static function listar(){   
        
        include "Model/VeiculosModel.php";   
        
        $model = new VeiculosModel();
        $model->getAllRows();

        include 'View/Modules/Veiculos/ListarVeiculos.php';
    }

}

?>