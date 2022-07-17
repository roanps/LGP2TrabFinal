<?php 

class ReservasDAO{
    private $conexao;

    public function __construct(){
        // DSN (Data Source Name) onde o servidor MySQL será encontrado
        // (host) em qual porta o MySQL está operado e qual o nome do banco pretendido
        $dsn = "mysql:host=localhost:3306; dbname=reservarveiculos";

        // Criando a conexão e armazenado na propriedade definida para tal, informando user e senha do banco
        $this->conexao = new PDO($dsn, 'root', 'root');
    }


    public function insertReserva(ReservasModel $model){
      ;  
    }

    public function selectReservas(){
       ; 
    }

    public function selectServidoresNomes(){
      ;
    }

    public function selectReservasVeiculos(){
       ;
    }
}
?>