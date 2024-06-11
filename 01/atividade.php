<?php
 # 1
    // Crie uma variável para nome e outra para profissão
    // Escreva a mensagem "Fulano é tal_profissao"

    # 2
    // Crie uma variável senha e aramezene "senha123"
    // Verifique se a senha tem mais de 8 caracteres
    // Se sim, diga que a senha é válida. Se não, diga que é inválida

    # 3
    // Corrija a palavra "ExEmPlO" para que ela fique totalmente em minúsculo

    # 4
    // Corrija o link "  http://exemplo.com  " para que ele não tenha espaços inválidos

    # 5
    // Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão

    $nome= "Arthur";
    $profisao="Desenvolvedor";
    $nome_profisao= $nome . " trabalha como: " . $profisao;
    echo $nome_profisao;

    $senha = "senha233421";

    if(strlen($senha) >= 8) {
        echo "<br>Sua senha é válida";
    } else {
        echo "<br>Sua senha é inválida";
    }
    
    $texto = "ExEmPlO";
    echo "<br>". strtolower($texto);
    

    $link = "  http://exemplo.com  ";
    echo "<br>" . trim($link);

    $stringOriginal = "abcd123";
    $stringInvertida = strrev($stringOriginal);
    echo  "<br>" .strpos($stringInvertida, "3");
    
?>