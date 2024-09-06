<?php
//A função json_decode permite a opereação contraria, ou seja partindo
//de um json, deixandoa coleção operavel em php.
 
$json = '["joão", "Ana", "Carlos" , "Martin"]';
 
$nome = json_decode ($json);
 
echo'<pre>';
 
print_r($nome);
 
 
 
 
 
 
 
 
?>