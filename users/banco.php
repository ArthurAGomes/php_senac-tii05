<?php
$dsn = 'mysql:host=localhost;dbname=exercises_users';
$user = 'root';
$password = '';

// Função para conectar com banco de dados 
function connect() {
    
    try {
        global $dsn, $user, $password;
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return;
    }
}