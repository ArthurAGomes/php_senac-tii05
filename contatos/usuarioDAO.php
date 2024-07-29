<?php
require_once 'database.php';
require_once 'usuario.php';

// Trazer o que há no banco, e mapear para a aplicação
class UsuarioDAO {
    private $bancoDeDados;

    public function __construct() {
        $banco = new Database();
        $this->bancoDeDados = $banco->getConexao();
    }

    public function getContatos() {
        $stmt = $this->bancoDeDados->prepare("SELECT * FROM contatos_info");
        $stmt->execute();
        $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return array_map(function($contato) {
            return new Usuario($contato['id'], $contato['nome'], $contato['telefone'], $contato['ddd'], $contato['email']);
        }, $contatos);
    }

    public function getContatoByNome() {

    }

    public function createContato() {

    }

    public function deleteContato() {

    }
}
?>