<?php
//// INTRODUÇÃO A ARRAYS EM PHP

// Definição de Arrays
$frutas = array("Maçã", "Banana", "Laranja", "Morango");
print_r($frutas);
echo "<br>";

$numeros = [2, 5, 6, 9];
print_r($numeros);
echo "<br>";

$alunos = array("João" => 18, "Maria" => 20, "Pedro" => 19);
print_r($alunos);
echo "<br>";

// Acessando elementos de um array
echo "A segunda frunta é: " . $frutas[1] . "<br>";
echo "O terceiro número é: " . $numeros[2] . "<br>";
echo "A idade de João é: " . $alunos["João"] . " anos <br>";

// Alterando elementos de um array
$frutas[0] = "Pera";
print_r($frutas);
echo "<br>";

$numeros[4] = 100;
print_r($numeros);
echo "<br>";
// Valores podem ser repetidos mas as chaves nao exemplos abaixo 
$alunos["Maria"] = 21;
$alunos["Ana"] = 21;
print_r($alunos);

?>