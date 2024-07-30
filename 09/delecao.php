<?php
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);

    $sql = "DELETE FROM itens_compra WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => 7]);

    echo "Item removido com sucesso!";
} catch (PDOException $e) {
    echo 'Falha na conexão: ' . $e->getMessage();
}
?>