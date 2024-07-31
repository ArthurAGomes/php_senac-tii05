<?php
$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'root';
$password = '';

// Função para conectar com banco de dados 
function connect() {
    
    try{
        global $dsn, $user, $password;
        $pdo = New PDO($dsn, $user, $password);
        return $pdo;

    } catch (PDOException $e) {
        echo 'Falha na conexao: ' . $e->getMessage();
        exit;
    }
}

// Função para obter os dados dos itens(READ)
function getALLitems(){
    $pdo=connect();
    $sql="SELECT * FROM itens_compra";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//Função para adicionar um novo item (Create)
function addItem($nome_produto, $quantidade){
    $pdo = connect();
    $sql="INSERT INTO itens_compra (nome_produto, quantidade)VALUES(:nome_produto, :quantidade)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(['nome_produto'=>$nome_produto, 'quantidade'=>$quantidade]);
}

//Função para atualizar um item (UPDATE)
function updateItem($id, $comprado){

}

// Funçao para excluir um item (DELETE)
function deleteItem($id){

    $pdo=connect();

    $sql = "DELETE FROM itens_compra WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    echo "Item removido com sucesso!";
}

?>