<?php

// Função para conectar ao banco de dados
function connect() {
    try {    
        $pdo = new PDO('mysql:host=localhost;dbname=lista_compras', 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        echo 'Falha na conexao: ' . $e->getMessage();
        exit;
    }
}

// Função para obter todos os itens (Read)
function getAllItems() {
    $pdo = connect();
    $sql = "SELECT * FROM itens_compra";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para adicionar um novo item (Create)
function addItem($nome_produto, $quantidade) {
    $pdo = connect();
    $sql = "INSERT INTO itens_compra (nome_produto, quantidade) 
            VALUES (:nome_produto, :quantidade)";
    
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['nome_produto' => $nome_produto
                            , 'quantidade' => $quantidade]);
}

// Função para atualizar um tem (Update)
function updateItem($id, $comprado) {
    $pdo = connect();

    $sql = "UPDATE itens_compra SET comprado=:x WHERE id=:y";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['x' => $comprado, 'y' => $id]);    
}

// Função para atualizar um tem (Update)
function updateQuantidadeItem($id, $quantidade) {
    $pdo = connect();

    $sql = "UPDATE itens_compra SET quantidade=:quantidade WHERE id=:id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['quantidade' => $quantidade, 'id' => $id]);
}

// Função para excluir um item (Delete)
function deleteItem($id) {
    $pdo = connect();
    $sql = "DELETE FROM itens_compra WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['id' => $id]);
}

?>