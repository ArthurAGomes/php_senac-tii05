<?php
require_once 'DatabaseRepository.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Busca o item pelo ID
    $item = DatabaseRepository::getItensById($id);

    if (!$item) {
        echo "Item não encontrado.";
        exit;
    }

    $updated = DatabaseRepository::toggleComprado($id);

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
