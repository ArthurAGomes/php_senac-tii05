<?php
require_once 'DatabaseRepository.php';
$Itens = DatabaseRepository::getAllItens();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-50 to-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-8 shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-black-700 mb-6 text-center">Lista de Compras</h1>
        <a href="add_itens.php" class="bg-green-500 text-white py-2 px-4 rounded-full shadow hover:bg-green-600 transition duration-300 mb-6 inline-block">Adicionar Item</a>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
                <thead>
                    <tr class="bg-green-500 text-white uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Nome</th>
                        <th class="py-3 px-6 text-left">quantidade</th>
                        <th class="py-3 px-6 text-left">Comprado</th>
                        <th class="py-3 px-6 text-left">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    <?php foreach ($Itens as $Itens): ?>
                        <tr class="border-b border-gray-200 hover:bg-green-100 transition duration-200">
                            <td class="py-3 px-6 text-left"><?= $Itens['nome_produto']; ?></td>
                            <td class="py-3 px-6 text-left"><?= $Itens['quantidade']; ?></td>
                            <td class="py-3 px-6 text-left"><?= $Itens['comprado']; ?></td>
                            <td class="py-3 px-6 text-left">
                                <a href="update.php?id=<?= $Itens['id']; ?>" class="text-green-700 hover:underline hover:text-green-700 transition duration-300 mr-2">Comprar</a>
                                <a href="delete_itens.php?id=<?= $Itens['id']; ?>"
                                    class="text-red-500 hover:underline hover:text-red-700 transition duration-300"
                                    onclick="confirmDelete(event)">Remover</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script>
    function confirmDelete(event) {
        if (!confirm("Tem certeza que deseja remover este item da sua lista de compras!")) {
            event.preventDefault();
        }
    }
</script>

</html>