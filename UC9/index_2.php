<?php
//O JSOM não está limitado a coleções simples.
//Podem ser coleções de dados bastante complexos.

$dados['status'] = 'sucesso';
echo '<hr>';
$dados['result'] = true;
echo '<hr>';
$dados['pessoas'] = ['joão','ana','carlos','fernando','francisco','silva'];
echo '<hr>';
$dados['cidades'] = ['São Paulo', 'Rio de janeiro','Fortaleza','Salvador'];
echo '<hr>';
$dados['linguas'] = [
    'pt' => 'português',
    'en' => 'inglês',
    'fr' => 'francês',
    'de' => 'alemão',
    'es' => 'espanhol'
];
echo '<hr>';
$dados['tabuada'] = [];
for($a =1; $a <=5; $a++){
    for($b = 1; $b <=5; $b++){
        $dados['tabuada'][$a.'x'.$b] = $a * $b;
    }
}
echo '<hr>';
echo '<pre>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);