<?php
//Existem duas funçoes fundamentais no php para tratar JSON.
//Uma para criar dados no formato JSON.
//Outra transformar doados de for,ato JSON em PHP (arrays)
 
//Transformar arrays em JSON
 
$dados = [
 
    'João',
    'Ana',
    'Carlos',
    'Joaquim',
    'Cristina',
];
 
echo '<pre>';
//Json_encode transforma um array em uma string JSON.
 
echo json_encode($dados);
 
echo '<hr>';
 
echo json_encode($dados , JSON_PRETTY_PRINT);
 
echo '<hr>';
 
 
//Acentuação legivel
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

//associação po js
$dadoss = [
   
    'administrador' => 'joão ribeiro',
    'secretaria' => 'Claudia',
     'financeiro' => 'joaquim',
    'secretaria_financeiro' => 'ana silva'
];
 
 //Acentuação legivel
echo json_encode($dadoss, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
 
?>

<script>
    let dadoss = JSON.parse('<?php echo json_encode($dadoss, JSON_UNESCAPED_UNICODE)?>');
    console.log(dadoss);

    // Tabelas
    console.table(dadoss);

    // individual
    console.log(dadoss.administrador);
</script>
 