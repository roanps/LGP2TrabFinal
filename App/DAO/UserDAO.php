<?php 

class UserDAO{
    private $conexao;

    public function __construct(){
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        // (host) em qual porta o MySQL está operado e qual o nome do banco pretendido
        $dsn = "mysql:host=localhost:3306; dbname=reservarveiculos";

        // Criando a conexão e armazenado na propriedade definida para tal, informando user e senha do banco
        $this->conexao = new PDO($dsn, 'root', 'root');
    }

    // Retorna o id da tabela user do banco de dados.
    // O método exige um parâmetro $id do tipo inteiro.
    public function selectById(int $id)
    {
        include_once 'Model/UserModel.php';

        $sql = "SELECT * FROM user WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("UserModel"); // Retornando um objeto específico UserModel
    }


    public function insertUser(UserModel $model){
        // Trecho de código SQL com marcadores ? para substituição posterior, no prepare
        $sql = "INSERT INTO user (user, senha, nome, cpf) VALUES ( ?, ?, ?, ?)";

        // Declaração da variável stmt que conterá a montagem da consulta. Observe que
        // estamos acessando o método prepare dentro da propriedade que guarda a conexão
        // com o MySQL, via operador seta "->". Isso significa que o prepare "está dentro"
        // da propriedade $conexao e recebe nossa string sql com os devidor marcadores.
        $stmt = $this->conexao->prepare($sql);

        // Nesta etapa os bindValue são responsáveis por receber um valor e trocar em uma 
        // determinada posição, ou seja, o valor que está em 3, será trocado pelo terceiro ?
        // No que o bindValue está recebendo o model que veio via parâmetro e acessamos
        // via seta qual dado do model queremos pegar para a posição em questão.
        
        $stmt->bindValue(1, $model->user);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->nome);
        $stmt->bindValue(4, $model->cpf);

        $stmt->execute();
    }


}
?>