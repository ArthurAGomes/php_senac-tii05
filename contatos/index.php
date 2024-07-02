<?php

function getConexaoBD() {
    $host = 'localhost';
    $bd = 'contatos';
    $usuario = 'root';
    $senha = "";

    try {
        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);
        return $conexao;
    } catch (PDOException $e) {
        echo 'Conexão com o banco falhou!' . $e->getMessage();
        exit;
    }
}

function getContatos() {
    $conn = getConexaoBD();
    $stmt = $conn->prepare("SELECT * FROM contatos_info");
    $stmt->execute();
    $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $contatos;
}

$contatos = getContatos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>
    <?php foreach($contatos as $contato) : ?>
        <h5><?php echo $contato['nome']; ?> </h5>
        <p><?php echo $contato['telefone']; ?> </p>
        <p><?php echo $contato['email']; ?> </p>
        <hr>
    <?php endforeach; ?>
</body>
</html>

