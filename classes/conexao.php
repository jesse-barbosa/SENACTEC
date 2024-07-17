<?php

class Conexao {
    protected $servidor, $usuario, $senha, $banco, $conectar, $sql, $query, $dados, $totalDados;

    public function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "dbsenactecjessebarbosa";
        self::conectarBanco();
    }
    public function conectarBanco() {
        try {
            $this->conectar = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco);
        }
        catch (Exception $e)
        {
            echo "Acesso ao banco de dados ". $this->banco."negado. ".$e->getMessage();
        }
    }
    
    protected function execQuery($sql) {
        try {
            $this->query = $this->conectar->query($sql);
            return $this->query;
        } catch (Exception $e){
            echo "Query executada: ".$this->query;
            echo "Erro ao executar a query: ".$e->getMessage();
        }
    }

    protected function listarDados($qr) {
        try {
            $this->dados = mysqli_fetch_assoc($qr);
            return $this->dados;                                                                                                                        
        } catch(Exception $e){
            echo "Query executada: " . $this->query;
            echo "Erro ao listar os dados do banco: " . $e->getMessage();
        }
    }

    protected function contarDados($qr) {     
        
        try {
            $this->totalDados = mysqli_num_rows($qr);
            return $this->totalDados;
        } catch (Exception $e) {
            echo "Query executada: " . $this->totalDados;
            echo "Erro ao mostrar o total de dados encontrados: " . $e->getMessage();
        }                                                                                                                                                                                                            
    }
}

?>
