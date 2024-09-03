<?php

class DatabaseRepository {
    // Dados de conexão
    private static $dsn = 'mysql:host=localhost;dbname=lista_compras';
    private static $username = 'root';
    private static $password = '';
    private static $pdo = null; // Propriedade estática para armazenar a conexão PDO

    // Método para conectar ao banco de dados
    private static function connect() {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO(self::$dsn, self::$username, self::$password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception('Falha de Conexão: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }

    // Método para buscar todos os itens
    public static function getAllItens() {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getItensById($id) {
        $pdo = self::connect();
        $sql = "SELECT * FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function insertItens($nome_produto, $quantidade, $comprado) {
        $pdo = self::connect();
        $sql = "INSERT INTO itens_compra (nome_produto, quantidade, comprado) 
                VALUES (:nome_produto, :quantidade, :comprado)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            'nome_produto' => $nome_produto,
            'quantidade' => $quantidade,
            'comprado' => $comprado
        ]);
    }

    public static function toggleComprado($id) {
        $pdo = self::connect();
        $sql = "UPDATE itens_compra 
                SET comprado = NOT comprado 
                WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
    
    public static function deleteItem($id) {
        $pdo = self::connect();
        $sql = "DELETE FROM itens_compra WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
