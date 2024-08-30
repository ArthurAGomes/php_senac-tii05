<?php

require_once 'DatabaseRepository.php';

$acao = isset($_GET['action']) ? $_GET['action'] : '';

switch ($acao) {

    case 'list':
        echo json_encode(DatabaseRepository::getAllItems());
        break;

    case 'add':
        $data = json_decode(file_get_contents('php://input'), true);
        DatabaseRepository::addItem($data['nome_produto'], $data['quantidade']);
        break;

    case 'update':
        $id = $_GET['id'];
        $data = json_decode(file_get_contents('php://input'), true);
        break;

    case 'apagar':
        $id = $_GET['id'];
        DatabaseRepository::deleteItem($id); 
        break;

    default:
        echo json_encode(['error' => 'Acao Invalida']);
}

?>