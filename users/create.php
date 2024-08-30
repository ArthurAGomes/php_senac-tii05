<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Create</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'banco.php';
        // Certifique-se de que a variável $pdo está disponível globalmente
        global $pdo;
        
        $name = $_POST['name'];
        $email = $_POST['email'];

        try {
            $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            echo "Usuario criado com sucesso";
        } catch (PDOException $e) {
            echo "ERRO: " . $e->getMessage();
        }
    }
    ?>
</body>
</html>
