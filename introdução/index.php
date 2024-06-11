<?php
    //// STRINGS

    # Exibir dados em tela
    echo "Olá Mundo <br>";
    echo "Olá Mundo 2 <br>";

    # Declaração de variáveis
    $nome = "João";
    $sobrenome = "Silva";
    $nome_completo = $nome . " " . $sobrenome;
    echo $nome_completo;
    echo "<br>";

    # Para obter o comprimento de uma string em PHP, suamos o strlen()
    $texto = "Olá, mundo!";
    echo strlen($texto); // saída 12
    echo "<br>";

    # Para substituir partes de uma string, usamos a função str_replace()
    $texto = "O rato roeu a roupa";
    $novo_texto = str_replace("rato", "gato", $texto);
    echo $novo_texto;
    echo "<br>";

    # strtolower(): converte uma string para letras minusculas
    # strtoupper(): converte uma string para letras maiusculas
    echo $texto = "Olá, mundo! <br>";
    $texto_minusculo = strtolower($texto); //
    $texto_maiusculo = strtoupper($texto); //
    echo $texto_minusculo;
    echo $texto_maiusculo;

    # trim(): Remove espaços em branco no início e no final de uma string
    $texto = "  Olá, Mundo!      ";
    echo strlen($texto);
    echo "<br>";
    $texto_sem_espacos = trim($texto);
    echo strlen($texto_sem_espacos);
    echo "<br>";
    
    # strpos - Encontra a primeira posicao de uma string especifica
    $lista_alunos = "joao, maria, fernando, natalia, maria";
    $posicao_maria = strpos($lista_alunos, "maria");
    echo "A posição de maria é : $posicao_maria";
    echo "<br>";

    # strrev(): Inveter uma string
    $texto = "Socorram me subi no onibus em marrocos";
    $texto_invertido = strrev($texto);
    echo $texto_invertido;
?>

<h2>Olá <?php echo $nome_completo?></h2>