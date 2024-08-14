<?php

require_once 'DatabaseRepository.php';

$acao = $_GET['acao'];

if($acao == 'listar') {
    echo json_encode(DatabaseRepository::getAllItems());
} else if($acao == 'adicionar') {
    $data = json_decode(file_get_contents('php://input'), true);
    echo DatabaseRepository::addItem($data['nome_produto'], $data['quantidade']);
} else if($acao == 'atualizar') {
    $id = $_GET['id'];
    $data = json_decode(file_get_contents('php://input'), true);
    //echo json_encode($data);
    echo DatabaseRepository::updateItem($id, $data['nome_produto'], $data['quantidade'], $data['comprado']);
}  else if($acao == 'deletar') {
    $id = $_GET['id'];
    echo DatabaseRepository::deleteItem($id);    
} else {
    echo "Ação não implementada";
}

?>