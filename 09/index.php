<?php
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'root';
$password = '';

// Documentação:
// https://www.php.net/manual/en/pdo.connections.php

try {
    $dbh = new PDO($dsn, $user, $password);
    echo "Conectado ao banco de dados";

} catch(PDOException  $e) {
    echo "deu errado". "<br>";
    echo $e;

    exit;
}


?>