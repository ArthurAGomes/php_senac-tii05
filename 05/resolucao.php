<?php
// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
// for 
$numero = 5;

for ($i = $numero; $i >= 0; $i--) {
    echo "Falta $i segundos\n";
    echo "<br>";
}
echo "<br>";
// while

$numero = 5;

while ($numero >= 0) {
    echo "Falta $numero segundos\n";
    echo "<br>";
    $numero--;
}
echo "<br>";

// do - while

$numero = 5;

do {
    echo "Falta $numero segundos\n";
    echo "<br>";
    $numero--;
} while ($numero >= 0);
echo "<br>";
echo "<hr>";
/*
Desafio 2: Tabuada

    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/

$tabuada_numero = 8;
// for
for ($i = 1; $i <= 10; $i++) {
    echo "$tabuada_numero x $i = ".($tabuada_numero * $i)."\n";
    echo "<br>";
}
echo "<br>";

// while    

$tabuada_numero = 8;
$i = 1;
while ($i <= 10) {
    echo "$tabuada_numero x $i = ".($tabuada_numero * $i)."\n";
    echo "<br>";
    $i++;
}

echo "<br>";    
echo "<hr>";
/*
 Desafio 3: Sequência Fibonacci

    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/

$num_seguencia = 10;

// for

for ($i = 1; $i <= $num_seguencia; $i++) {
    if ($i == 1) {
        echo "0";
    } else if ($i == 2) {
        echo "1";
    } else {
        echo $i - 1 + $i - 2;
    }
    echo "<br>";
}

echo "<br>";

// while    
$num_seguencia = 10;
$i = 1;
while ($i <= $num_seguencia) {
    if ($i == 1) {
        echo "0";
    } else if ($i == 2) {
        echo "1";
    } else {
        echo $i - 1 + $i - 2;
    }
    echo "<br>";
    $i++;
}

echo "<hr>";

//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO
// Atividade 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 5;
$B = 10;
$C = 15;

if ($A + $B == $C) {
    echo "A soma é igual a $C\n";
    echo "<br>";
} else{
    echo "A soma não é igual a $C\n";
    echo "<br>";
}
echo "<hr>";

// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$num_ao = 3;
echo "O quadrado de $num_ao é ".($num_ao * $num_ao)."\n";
echo "<br>";
echo "<hr>";

// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/

$num_ao = 8;
if ($num_ao % 2 == 0) {
    echo "$num_ao é par\n";
    echo "<br>";
} else {
    echo "$num_ao é ímpar\n";
    echo "<br>";
}

echo "<hr>";

// Atividade 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
    Implementação do Cálculo da Média
*/
$numero1 = 10;
$numero2 = 15;
$numero3 = 20;

$media = ($numero1 + $numero2 + $numero3) / 3;

echo "A média entre $numero1, $numero2 e $numero3 é $media\n";

echo "<hr>";

// Atividade 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
  Implementação da Verificação de Múltiplo
*/
$numeroMultiplo = 15;
$multiploDe = 5;

if ($numeroMultiplo % $multiploDe == 0) {
    echo "$numeroMultiplo é múltiplo de $multiploDe\n";
    echo "<br>";
} else {
    echo "$numeroMultiplo não é múltiplo de $multiploDe\n";
    echo "<br>";
}

echo "<hr>";

//// Atividade 6: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas_string = "01:30";
// Implementação de Conversão de Horas em Minutos
$horas = explode(":", $horas_string);
$minutos = ($horas[0] * 60) + $horas[1];
echo "O equivalente total em minutos de $horas_string é: $minutos <br>";
echo "<hr>";

/// Atividade 7: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
// Implementação de Desenho de Pirâmide
$altura_piramide = 5;
for ($i = 1; $i <= $altura_piramide; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";

//// Atividade 8: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número

$numeroDigitos = 2048;

$contador = 0;

while ($numeroDigitos > 0) {
    $numeroDigitos = $numeroDigitos / 10;
    $contador++;
}

echo "O número $numeroDigitos possui $contador dígitos\n";


//// Atividade 10: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero4 = 25;
$numero5 = 1;
$numero6 = 7;
// Implementação de Ordenação de Números

if ($numero4 > $numero5 && $numero4 > $numero6) {
    if ($numero5 > $numero6) {
        echo "$numero4, $numero5, $numero6\n";
    } else {
        echo "$numero4, $numero6, $numero5\n";
    }
} else if ($numero5 > $numero4 && $numero5 > $numero6) {
    if ($numero4 > $numero6) {
        echo "$numero5, $numero4, $numero6\n";
    } else {
        echo "$numero5, $numero6, $numero4\n";
    }
} else {
    if ($numero4 > $numero5) {
        echo "$numero6, $numero4, $numero5\n";
    } else {
        echo "$numero6, $numero5, $numero4\n";
    }
}

echo "<hr>";

//// Atividade 11: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/
$numeroSoma = 599;
// Implementação de Soma de Dígitos

$numeroSoma = 599;

$soma = 0;

while ($numeroSoma > 0) {
    $soma += $numeroSoma % 10;
    $numeroSoma = (int)($numeroSoma / 10);
}

echo "A soma dos dígitos de $numeroSoma é $soma\n";

echo "<hr>";

?>