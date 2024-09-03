<?php
require_once 'DatabaseRepository.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    $comprado = $_POST['comprado'];
    DatabaseRepository::insertItens($nome_produto, $quantidade, $comprado);
    header('Location: list_itens.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Adicionar Item</h1>

        <form action="add_itens.php" method="post" class="space-y-4">
            <div>
                <label for="nome_produto" class="block text-sm font-medium text-gray-700">Nome:</label>
                <input type="text" name="nome_produto" id="nome_produto" required class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>
            <div>
                <label for="quantidade" class="block text-sm font-medium text-gray-700">Quantidade:</label>
                <input type="text" name="quantidade" id="quantidade" required class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>
            <div>
                <label for="comprado" class="block text-sm font-medium text-gray-700">Comprado:</label>
                <input type="text" name="comprado" id="comprado" required class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Adicionar</button>
        </form>

        <a href="list_itens.php" class="text-blue-500 hover:underline mt-4 inline-block">Voltar para a lista de compras</a>
    </div>
</body>
</html>
