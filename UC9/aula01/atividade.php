<?php
$dados = [
    'Balão magico',
    'Carros de corridas', 
    'Bonecas',
    'Carteados',
    'Tabuleiros'

];

echo '<pre>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>