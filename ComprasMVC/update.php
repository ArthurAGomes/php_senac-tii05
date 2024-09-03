<?php
require_once 'DatabaseRepository.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

 
    $item = DatabaseRepository::getItensById($id);

    if (!$item) {
        echo "Item não encontrado.";
        exit;
    }

    $updated = DatabaseRepository::updateItem($id, $item['nome_produto'], $item['quantidade'], 1);

    if ($updated) {

        header('Location: list_itens.php');
        exit;
    } else {
        echo "Erro ao atualizar o item.";
    }
} else {
    echo "ID não especificado.";
    exit;
}
?>
