<?php

require_once 'DatabaseRepository.php';

$acao = $_GET['acao'];

if($acao == 'listar') {
    echo json_encode(DatabaseRepository::getAllItems());
} else if($acao == 'adicionar') {
    echo DatabaseRepository::addItem("Suco", "20");
} else if($acao == 'atualizar') {
    echo DatabaseRepository::updateItem(12, 1);
}  else if($acao == 'deletar') {
    echo json_encode(DatabaseRepository::deleteItem(10)); 
} else {
    echo "Ação não implementada";
}

?>