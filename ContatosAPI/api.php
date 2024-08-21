<?php
require_once 'DatabaseRepository.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action) {
    case 'list':
        echo json_encode(DatabaseRepository::getAllContacts());
        break;
    case 'get':
        $id = $_GET['id'];
        echo json_encode(DatabaseRepository::getContactById($id));
        break;
    case 'add':
        $data = json_decode(file_get_contents('php://input', true));
        $success = DatabaseRepository::insertContact($data->nome, $data->telefone, $data->email);
        echo json_encode($success);
        break;
    default:
        echo json_encode(['error' => 'Acao invalida']);
}

?>