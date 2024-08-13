<?php

class DatabaseRepository {
    private $dsn = 'mysql:host=localhost;dbname=lista_compras';
    private $username = 'root';
    private $password = '';

    public function connect() {

    }

    public function getAllItems() {
        return "Retornou todos os itens com sucesso";
    }

    public function addItem() {
        return "Adicionou o item com sucesso";
    }

    public function updateItem() {
        return "Atualizou o item com sucesso";
    }

    public function deleteItem() {
        return "Deletou o item com sucesso";
    }
}
