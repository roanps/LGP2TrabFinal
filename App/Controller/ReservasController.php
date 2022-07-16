<?php

class ReservasController{
    public static function cadastrar(){      
        
        include 'View/Modules/Reservas/CadastroReservas.php';
    }

    public static function validarCadastro(){
        include 'Model/ReservasModel.php';

        $model = new ReservasModel();

        $model->data = $_POST['data'];
        $model->desc = $_POST['desc'];

        $model->salvarReserva();

        include 'View/Modules/User/Inicio.php';
    }

    public static function listar(){   
        
        include "Model/ReservasModel.php";   
        
        $model = new ReservasModel();
        $model->getAllRows();

        include 'View/Modules/Reservas/ListarReservas.php';
    }

}

?>