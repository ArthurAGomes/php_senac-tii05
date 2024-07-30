<?php
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM lista_compras.itens_compra WHERE nome_produto = :nome_produto";
    $stmt = $dbh->prepare($sql);

    $stmt->execute(['nome_produto' => 'Leite']);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch(PDOException $e) {
    echo "Erro ao se conectar ao banco: <br>";
    echo $e;
    exit;
}

?>