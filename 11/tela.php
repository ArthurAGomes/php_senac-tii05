<?php
include 'banco.php';

$todos_itens = getAllItems();
echo "<pre>";
print_r($todos_itens);
echo "</pre>";

// addItem("Amendoim", 10);
//deleteItem(5);
// updateItem(3, true);
// updateQuantidadeItem(3, 30);
?>

