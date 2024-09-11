<?php
//Setar o conteúdo da API
header("Content-Type: application/json; charset=UTF-8");

$data = require_once('../_data/dataBaseRepository.php');

if (!isset($_GET['max_results']) || $_GET['max_results'] < 1 || $_GET['max_results'] > count($data)) {
    $reponse['status'] = "error";
    $reponse['message'] = "Não esta definida";
    $reponse['time_reponse'] = time();
    echo json_encode($reponse, JSON_UNESCAPED_UNICODE);
    exit();
}
