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
echo "<br>";

echo "Exemplo de constante mágica __DIR__ para obter o diretório atual: " . __DIR__ . "<br>";
echo "Exemplo de constante mágica __FILE__ para obter o caminho completo do arquivo: " . __FILE__ . "<br>";
echo "<br>";
$numero = 70;
if($numero < 20) {
    echo "Número menor que 20";
}
echo "<br>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($numero < 20): ?>
        <h2>Esse texto só deve aparecer se o número for menor que 20</h2>
    <?php endif ?>
</body>
</html>