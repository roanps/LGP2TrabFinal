<?php
class VeiculosModel{

    public $placa, $modelo;
    public $rows;

    public function salvarVeiculo(){
        include 'DAO/VeiculosDAO.php';

        $dao = new VeiculosDAO();

        if(empty($this->id))
        {
            $dao->insertVeiculo($this);
        }
    }

    public function getAllRows(){
        include 'DAO/VeiculosDAO.php';

        $dao = new VeiculosDAO();

        $this->rows = $dao->selectVeiculos();
    }
}
?>