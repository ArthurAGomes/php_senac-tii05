<?php

class DatabaseRepository {
    private static $dsn = 'mysql:host=localhost;dbname=lista_compras';
    private static $username = 'root';
    private static $password = '';

    public static function connect() {        
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
        }
    }

    public static function getAllItems() {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addItem($nome_produto, $quantidade) {
        $pdo = self::connect();
        $sql = "INSERT INTO itens_compra (nome_produto, quantidade) VALUES (:nome_produto, :quantidade)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['nome_produto' => $nome_produto, 'quantidade' => $quantidade]);
    }

    public static function updateItem($id, $nome_produto, $quantidade, $comprado) {
        $pdo = self::connect();
        $sql = "UPDATE itens_compra SET nome_produto=:nome_produto, quantidade=:quantidade, comprado=:comprado
                WHERE id=:id";
        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            'nome_produto' => $nome_produto,
            'quantidade' => $quantidade,
            'comprado' => $comprado,
            'id' => $id
        ]);
    }

    public static function deleteItem($id) {
        $pdo = self::connect();
        $sql = "DELETE FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);        
        return $stmt->execute(['id' => $id]);
    }
}
