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
        //echo $dados['nome']."!";
        if(empty($dados)){
            $_SESSION['msg'] = "Login efetuado com sucesso!";
            return true;
        }else{
            return false;
        }

        
    }
}
?>