<?php
class Usuario {
    private $id;
    private $nome;
    private $telefone;
    private $ddd;
    private $email;

    public function __construct($id, $nomeUsuario, $telefone, $ddd, $email) {
        $this->id = $id;
        $this->nome = $nomeUsuario;
        $this->telefone = $telefone;
        $this->ddd = $ddd;
        $this->email = $email;
    }

    public function getTelefoneCompleto() {
        return $ddd . $telefone;
    }

    public function separaNome() {
        
    }
}
?>