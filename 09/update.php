<?php
$dsn = "mysql:host=localhost;dbname=lista_compras";
$username = 'root';
$password = '';

try {
   $pdo = new PDO($dsn,$username,$password);
    
    $sql= "UPDATE itens_compra SET comprado= :comprado WHERE id= :id";

    $stmt= $pdo->prepare($sql);
    $stmt->execute(['comprado' => true, 'id' =>10]);

    echo "item atualizado com sucesso";

}   catch (PDOException $e) {

    echo 'falha na conexão: ' . $e->getMessage();
    exit;
}
