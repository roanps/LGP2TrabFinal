<?php
class ReservasModel{

    public $nome, $cpf;
    public $rows;

    public function salvarReserva(){
        include 'DAO/ReservasDAO.php';

        $dao = new ReservasDAO();

        if(empty($this->id))
        {
            $dao->insertReserva($this);
        }
    }

    public function getAllRows(){
        include 'DAO/ReservasDAO.php';

        $dao = new ReservasDAO();

        $this->rows = $dao->selectReservas();
    }

    public function getServidoresNomes(){
        include 'DAO/ReservasDAO.php';

        $dao = new ReservasDAO();

        $this->rowsServidoresNomes = $dao->selectServidoresNomes();
    }
}
?>