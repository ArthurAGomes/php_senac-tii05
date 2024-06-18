<?php
//// VERIFICAÇÃO DE TIPOS DE DADOS E PALAVRAS RESERVADAS

$numero = 10;
$string = "texto";
$booleana = true;
$array = [1, 2, 3];

echo "Tipo de dado da variável \$numero " . gettype($numero) . "<br>";
echo "Tipo de dado da variável \$string " . gettype($string) . "<br>";
echo "Tipo de dado da variável \$booleana " . gettype($booleana) . "<br>";
echo "Tipo de dado da variável \$array " . gettype($array) . "<br>";
echo "<hr>";

// Verificação de tipo de dados com fluxo condicional
echo "Verifica se \$numero é do tipo int " . (is_int($numero) ? "Sim" : "Não") . "<br>";
echo "Verifica se \$string é do tipo string " . (is_string($string) ? "Sim" : "Não") . "<br>";
echo "Verifica se \$booleana é do tipo boolean " . (is_bool($booleana) ? "Sim" : "Não") . "<br>";
echo "Verifica se \$array é do tipo array " . (is_array($array) ? "Sim" : "Não") . "<br>";

// Conversão de tipo de dados
$numero_string = "1234";
$numero_convertido = (int)$numero_string;
echo "O número $numero_string convertido para int: " . gettype($numero_convertido) . "<br>";

$string_numero = 12340000;
$string_convertida = (string)$string_numero;
echo gettype($string_convertida);
echo "<br>";

//// Palavras Reservadas e Funções Comuns
print_r($array);
echo "<br>";

echo count($array) . "<br>";

// O 'require' é usado para associar outros arquivos ao seu atual
require 'pasta01/banco.php';

// Exemplo de uso de palavra reservada private para 
// definir um método privado em uma classe

class MinhaClasse {
    private $atributo;
}

class Pessoa {
    private $nome = "césar";

    public function setNome($novoNome) {
        if(is_string($novoNome)) {
            $this->nome = $novoNome;
        } else {
            echo "Tipo de dado incorreto!";
        }
    }

    public function getNome() {
        return $this->nome;
    }
}

$pessoa1 = new Pessoa();
$pessoa1->setNome("fulano de tal");
echo $pessoa1->getNome();
?>