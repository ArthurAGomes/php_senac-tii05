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

$alunos["Maria"] = 21;
$alunos["Ana"] = 21;
print_r($alunos);

// Adicionando elementos em um Array
$frutas[] = "Abacaxi";
$numeros[] = 93;
$alunos["José"] = 25;

echo "<hr>";

// Percorrendo um array com foreach
echo "Lista de Frutas: ";
foreach($frutas as $fruta) {
    echo $fruta . " ";
}
echo "<br>";

foreach($numeros as $numero) {
    // Escreva a lista de números
    echo $numero . " ";
}
echo "<br>";

foreach($alunos as $nome => $idade) {
    echo $nome . " tem " . $idade . " anos. ";
}
echo "<hr>";

// Funções úteis  para Arrays
echo "Número de elementos no array de frutas é: " . count($frutas) . "<br>";
echo "Índice da fruta 'Laranja': " . array_search("Laranja", $frutas) . "<br>";
echo "Última fruta do array: " . end($frutas) . "<br>";
echo "Array de frutas original: ";
print_r($frutas);
echo "<br>";
echo "Array de frutas depois de reverter";
$frutas_revertidas = array_reverse($frutas);
print_r($frutas_revertidas);
?>