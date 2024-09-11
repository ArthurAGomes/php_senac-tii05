<?php
// Existem duas funções fundamentais no php para tratar JSON.
// Uma para criar dados no formato JSON.
// Outra para transformar dados de formato JSON em PHP(arrays)

//transforma arrays em JSON

$dados = [
    'João',
    'Ana',
    'Carlos',
    'Joaquim',
    'Cristina',
    'André',
    'Conceição'
];
echo '<pre>';
//json_encode transforma um array em uma string JSON. 

echo json_encode($dados);
echo '<hr>';
//dados vão aparecer com caracteres unicode.
echo json_encode($dados, JSON_PRETTY_PRINT);

echo '<hr>';
//acentuação legível
echo json_encode($dados,JSON_UNESCAPED_UNICODE);

echo '<hr>';
echo json_encode($dados,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo '<hr>';
//associção por js
$dadoss = [
    'administrador' => 'João Ribeiro',
    'secretaria' => 'Carla Santos',
    'diretor_geral' => 'Márcio Silva',
    'oficial_contas' => 'Fernanda Correia'
];

echo json_encode($dadoss,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

<script>
let dadoss = JSON.parse('<?= json_encode($dadoss, JSON_UNESCAPED_UNICODE) ?> ');

//apresentação dos dados como objeto
console.log(dadoss);
//tabela
console.table(dadoss);
//Individual
console.log(dadoss.administrador);

</script>
















?>