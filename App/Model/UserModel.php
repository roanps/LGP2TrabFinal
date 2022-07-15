<?php
class UserModel{

    public $id, $login, $senha, $nome, $cpf;

    /**
     * Método que encapsula o acesso ao método selectById da camada DAO
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * a ser recuperado do MySQL, via camada DAO.
     */
    public function obterId(int $id)
    {
        include 'DAO/UserDAO.php'; // Incluíndo o arquivo DAO

        $dao = new UserDAO();

        $obj = $dao->selectById($id); // Obtendo um model preenchido da camada DAO

        
        if($obj)
        {
            return  $obj;
        } else {
            return new UserModel();
        }
    }

    public function salvarUser(){
        include 'DAO/UserDAO.php';

        $dao = new UserDAO();

        if(empty($this->id))
        {
            echo 'foi';
            $dao->insertUser($this);
        } else {
           // $dao->update($this); 
        }
    }
}
?>