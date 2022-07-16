<?php
class ServidoresModel{

    public $nome, $cpf;
    public $rows;

    public function salvarServidor(){
        include 'DAO/ServidoresDAO.php';

        $dao = new ServidoresDAO();

        if(empty($this->id))
        {
            $dao->insertServidor($this);
        }
    }

    public function getAllRows(){
        include 'DAO/ServidoresDAO.php';

        $dao = new ServidoresDAO();

        $this->rows = $dao->selectServidores();
    }
}
?>