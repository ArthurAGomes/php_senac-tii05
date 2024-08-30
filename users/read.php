<!DOCTYPE html>
<html>
<head>
    <title>Read Users</title>
</head>
<body>
    <h2>List of Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <?php
        require 'config.php';

        try {
            $sql = "SELECT * FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($users as $user) {
                echo "<tr>
                        <td>{$user['id']}</td>
                        <td>{$user['name']}</td>
                        <td>{$user['email']}</td>
                        <td>{$user['created_at']}</td>
                        <td>
                            <a href='update_user.php?id={$user['id']}'>Edit</a>
                            <a href='delete_user.php?id={$user['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </table>
</body>
</html>
