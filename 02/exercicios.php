<?php
/*
    FLOATS E BOOLEANOS

    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.

    Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.

    Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

    Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.

    Desafio: Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.

    PS.: Ao invés de solicitar ao usuário de fato, pode declarar uma variável com o valor diretamente no código.
    EX: $altura = 1.75;
*/


//------------ 1---------------
$peso= 82.2;
$altura=1.24;

$imc = $peso / ($altura * $altura);
echo "Seu imc é: " . $imc;


// ----2---

$tem_passaporte = true;
$tem_visto = false;

$pode_viajar = $tem_passaporte || $tem_visto;
echo " <br> Pode viajar para o exterior: ". ($pode_viajar? "Sim" : "Não");


// ----------3---------------

$celsius= 34.2;
$fahrenheit = ($celsius * 9/5) + 32;

echo " <br> A temperatura em Fahrenheit é: ". $fahrenheit;

// --------4-----

$maioridade = true;
$autorizacao = true;

if ($maioridade == true && $autorizacao == true) {
    echo " <br> Você tem acesso ao conteúdo restrito";
} else {
    echo " <br> Você não tem acesso ao conteúdo restrito";
}

// --------Desafio-----

$numero = 13;

if ($numero % 2 == 0) {
    echo " <br> O número é par";
} else {
    echo " <br> O número é impar";
}









