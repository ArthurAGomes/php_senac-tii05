<?php

class DatabaseRepository
{
    private static $dsn = 'mysql:host=localhost;dbname=contatos';
    private static $username = 'root';
    private static $password = '';

    public static function connect()
    {
        try {
            $pdo = new PDO(self::$dsn, self::$username, self::$password);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Erro de conexão: ' . $e->getMessage();
        }
    }

    public static function getAllItems()
    {
        $pdo = self::connect();
        $sql = "SELECT * FROM contatos_info";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addItem($nome, $telefone, $email)
    {
        $pdo = self::connect();
        $sql = "INSERT INTO contatos_info (nome, telefone, email ) VALUES (:nome, :telefone, :email)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            'nome' => $nome,
            'telefone'  => $telefone,
            'email' => $email
        ]);
    }

    public static function updateItem($id, $nome, $telefone, $email)
    {
        $pdo = self::connect();
        $sql = "UPDATE contatos_info SET nome =:nome, telefone=:telefone, email=:email
                WHERE id=:id";
        $stmt = $pdo->prepare($sql);

        return $stmt->execute([
            'nome' => $nome,
            'telefone' => $telefone,
            'email' => $email,
            'id' => $id
        ]);
    }

    public static function deleteItem($id)
    {
        //http://localhost/php_senac-tii05/ContatosAPI/api.php?action=apagar&id=11 
        $pdo = self::connect();
        $sql = "DELETE FROM contatos_info WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
