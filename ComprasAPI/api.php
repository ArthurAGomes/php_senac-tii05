<?php

require_once 'DatabaseRepository.php';
$database = new DatabaseRepository();

$acao = $_GET['acao'];

if($acao == 'listar') {
    echo $database->getAllItems();
} else if($acao == 'adicionar') {
    echo $database->addItem();
} else {
    echo "Ação não implementada";
}

?>