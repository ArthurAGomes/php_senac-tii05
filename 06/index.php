<?php
// Tenho o endereço da API
$URL = "http://tit0676503w10-1/aecio/server/mock_data.php";

// Obter os dados que essa página me entrega
$dados = file_get_contents($URL);

// Converto os dados para o PHP
$dados_do_senor = json_decode($dados, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Temperaturas</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tempo</th>
                <th>Temperatura</th>
                <th>Humidade (%)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados_do_senor as $entrada): ?>
                <tr>
                    <td><?php echo $entrada['timestamp'] ?></td>
                    <td><?php echo $entrada['temperature'] ?></td>
                    <td><?php echo $entrada['humidity'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>