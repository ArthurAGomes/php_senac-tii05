<?php
//A função json_decode permite a operação contrária, ou seja partindo de um json, deixando a coleção operável em PHP.

$json = '["João", "Ana", "Carlos", "Martin"]';
$nome = json_decode($json);
echo'<pre>';
print_r($nome);

$json = '{ "administrador": "João Ribeiro", "secretaria": "Cristina Santos", "oficial_de_contas": "Carlos Oliveira", 
    "colaboradores": { "chefe": "António Daniel", "coordenador_1": "Carlos", 
        "coordenador_2": "Marta", 
        "coordenador_3": "Marisa", 
        "coordenador_4": "Francisco" } }';
$dados_empresa = json_decode($json, true);
print_r($dados_empresa);