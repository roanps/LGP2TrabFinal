<?php
class UserModel{

    public $id, $login, $senha, $nome, $cpf;
 
    public function salvarUser(){
        include 'DAO/UserDAO.php';

        $dao = new UserDAO();

        if(empty($this->id))
        {
            echo 'foi';
            $dao->insertUser($this);
        }
    }

    public function logar(){
        include 'DAO/UserDAO.php';

        $dao = new UserDAO();

        //passa o model com o user e senha digitados para a função na DAO
        $dados = $dao->encontrarEmailSenha($this);

        if(empty($dados)){
            echo 'deu ruim';
        }else{
            echo 'maiza';
        }
    }
}
?>