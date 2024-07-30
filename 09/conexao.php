<?php
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras';
$password = 'Senha@123';

try {
    // https://www.php.net/manual/en/pdo.connections.php
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao banco de dados com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao se conectar ao banco: <br>";
    echo $e;
    exit;
}

?>