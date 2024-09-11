<?php
// Set o conteudo da API 

header("content-type: application/json; charset=UTF-8");

$reponse['status'] ='API Animais esta em execução!'; //Animais is runing API

$reponse['time_response'] = time();

echo json_encode($reponse,JSON_UNESCAPED_UNICODE); //retorna a resposta em JSON



?>