<?php
class Database {
    private $host = 'localhost';
    private $bd = 'contatos';
    private $usuario = 'root';
    private $senha = "";
    private $conexao;

    public function __construct() {
        try {
            $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        } catch (PDOException $e) {
            echo 'Conexão com o banco falhou!' . $e->getMessage();
            exit;
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}
?>