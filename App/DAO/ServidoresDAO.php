<?php 

class ServidoresDAO{
    private $conexao;

    public function __construct(){
        
        $dsn = "mysql:host=localhost:3306; dbname=reservarveiculos";

        $this->conexao = new PDO($dsn, 'root', 'root');
    }


    public function insertServidor(ServidoresModel $model){
        $sql = "INSERT INTO servidores (nome, cpf) VALUES ( ?, ?)";
 
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);

        $stmt->execute();
    }

    public function selectServidores(){
        $sql = 'SELECT * FROM servidores';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
?>