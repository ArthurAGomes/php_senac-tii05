<?php
//// Números e Operadores

# Operações básicas
$num1 = 10;
$num2 = 5;

# soma
$soma = $num1 + $num2;
echo "Soma: $soma <br>";

# subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

# multiplicação
$multiplicacao = $num1 * $num2;
echo "Multiplicação: $multiplicacao <br>";

# divisão
$divisao = $num1 / $num2;
echo "Divisão: $divisao <br>";

// Operações Incrementais e Decrementais
$num = 8;

# Incremento
$num++;
echo "Incremento: $num <br>";

# Decremento
$num--;
echo "Decremento: $num <br>";

// Operadores de Compração
$num1 = 4;
$num2 = 4;

# Igual a #1
echo "Igual a: ";
if($num1 == $num2) {
    echo "verdadeiro <br>";
} else {
    echo "falso <br>";
}

# Igual a # 2
$resultado =  $num1 == $num2;
echo "Igual a: $resultado <br>";

# Igual a # 3
echo "Igual a: ";
echo $num1 == $num2 ? "verdadeiro <br>" : "falso <br>";

# Diferente de 
echo "Diferente de: ";
echo $num1 != $num2 ? "verdadeiro <br>" : "falso <br>";

# Maior que
echo "Maior que: ";
echo $num1 > $num2 ? "verdadeiro <br>" : "falso <br>";

# Menor ou igual a
echo "Menor ou igual: ";
echo $num1 <= $num2 ? "verdadeiro <br>" : "falso <br>";

// Operadores lógicos:
echo "Operadores lógicos: <br>";
$condicao1 = true;
$condicao2 = false;

# E lógico (AND)
echo "E lógico (AND): ";
echo $condicao1 && $condicao2 ? "verdadeiro <br>" : "falso <br>";

# OU lógico (OR)
echo "E lógico (OR): ";
echo $condicao1 || $condicao2 ? "verdadeiro <br>" : "falso <br>";

# NÃO lógico (NOT)
echo "Não lógico (NOT) para a segunda condição: ";
echo !$condicao2 ? "verdadeiro <br>" : "falso <br>";

// Operações com Booleanos
# Operação com AND
$tem_idade = true;
$tem_cartao = false;

$pode_entrar = $tem_idade && $tem_cartao;
echo "Pode entrar na festa: " . ($pode_entrar ? "Sim" : "Não") . "<br>";

# Operação com OR
$tem_passaporte = true;
$tem_visto = false;

$pode_viajar = $tem_passaporte || $tem_visto;
echo "Pode viajar para o exterior: " . ($pode_viajar? "Sim" : "Não") . "<br>";

// Números Decimais (floats)
$altura = 1.82;
$peso = 79.5;

echo "A altura é : $altura metros <br>";
echo "O peso é: $peso kg <br>";

// Operações com floats
$preco_produto = 19.99;
$quantidade = 3;

$total_carrinho = $preco_produto * $quantidade;
echo "Total da compra: R$ $total_carrinho <br>";
?>