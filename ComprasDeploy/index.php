<?php
require_once 'models/DatabaseRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_id'])) {
        DatabaseRepository::deleteItem($_POST['delete_id']);
    } elseif (isset($_POST['toggle_id'])) {
        $item = DatabaseRepository::getItemById($_POST['toggle_id']);
        $new_comprado = $item['comprado'] ? 0 : 1;
        DatabaseRepository::updateItem($_POST['toggle_id'], $new_comprado);
    } elseif (isset($_POST['nome_produto']) && isset($_POST['quantidade'])) {
        DatabaseRepository::addItem($_POST['nome_produto'], $_POST['quantidade']);
    }
    header('Location: index.php');
    exit;
}

$items = DatabaseRepository::getAllItems();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Lista de Compras</h1>

        <form action="index.php" method="post" class="mb-6">
            <div class="flex flex-col mb-4">
                <label for="nome_produto" class="mb-2 text-gray-700">Nome do Produto</label>
                <input type="text" name="nome_produto" id="nome_produto" required class="p-2 border border-gray-300 rounded">
            </div>
            <div class="flex flex-col mb-4">
                <label for="quantidade" class="mb-2 text-gray-700">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" required class="p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Adicionar Item
            </button>
        </form>

        <h2 class="text-xl font-semibold mb-2">Itens a Comprar</h2>
        <ul class="space-y-4 mb-6">
            <?php foreach ($items as $item): ?>
                <?php if (!$item['comprado']): ?>
                    <li class="bg-white p-4 shadow rounded flex justify-between items-center">
                        <span><?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)</span>
                        <div class="flex space-x-2">
                            <form action="index.php" method="post">
                                <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                                <button type="submit" class="text-green-500 hover:text-green-700">
                                    <ion-icon name="checkmark-circle-outline"></ion-icon>
                                </button>
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </button>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <h2 class="text-xl font-semibold mb-2">Itens Comprados</h2>
        <ul class="space-y-4">
            <?php foreach ($items as $item): ?>
                <?php if ($item['comprado']): ?>
                    <li class="bg-gray-100 p-4 shadow rounded flex justify-between items-center">
                        <span><?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)</span>
                        <div class="flex space-x-2">
                            <form action="index.php" method="post">
                                <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                                <button type="submit" class="text-yellow-500 hover:text-yellow-700">
                                    <ion-icon name="refresh-outline"></ion-icon>
                                </button>
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </button>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>