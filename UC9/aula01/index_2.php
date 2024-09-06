<?php
//o JSON não esta limitado a coleções simples.
//podem ser coleções de dados bastantes complexos.
 
$dados['status'] = 'sucesso';
$dados['result'] = true;
$dados['pessoas'] = ['joão', 'ana', 'carlos', 'fernando', 'francisco', 'silva'];
$dados['cidades'] = ['São paulo', 'Rio de Janeiro', 'Fortaleza', 'Salvador'];
$dados['linguas'] = [
 
    'pt' => 'Português',
    'en' => 'Inglês',
    'fr' => 'Francês',  
    'de' => 'alemão',
    'es' => 'espanhol'
];
$dados['tabuada'] = [];
 for($a =1; $a <=5; $a++){
    for($b = 1; $b <=5; $b++){
        $dados['tabuada'][$a. 'x' .$b] = $a * $b;
    }
}
 echo '<pre>';
echo json_encode($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
 
?>