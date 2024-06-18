<?php
/*
1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
5 - Conte quantos elementos o array de dias de semana possui.
6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.
*/

// 1:
$diasSemanas = array("Segunda", "Terça","Quarta","Quinta", "Sexta","Sabado", "Domingo");
echo $diasSemanas[2];
echo '<hr>';
// 2:
$mesesAno = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
  $mesesAno[11]= "Onzembro";
  print_r($mesesAno);
  echo "<br>";
  echo '<hr>';
// 3:
$vazio = array();
$vazio[] = "adicionado";
print_r($vazio);
echo "<br>";
echo '<hr>';
// 4
foreach ($mesesAno as $mes) {
    echo $mes. "<br>";
}
echo '<hr>';
// 5 
echo count($diasSemanas). "<br>";

// 6
    echo "Sabado esta na posição: " . array_search("Sabado", $diasSemanas). " do array <br> ";
?>