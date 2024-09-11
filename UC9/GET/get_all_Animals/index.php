<?php

//Setar o conteúdo da API
header("Content-Type: application/json; charset=UTF-8");

$response['status'] = 'Sucesso!';

$response['animais'] = require_once('../_data/dataBaseRepository.php');

$response['time_response'] = time();

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>