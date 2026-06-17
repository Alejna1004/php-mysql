<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $getUsers = $conn->prepare($sql);
    $sqlUsers->execute();
    $users = $getUsers->fetchAll(PDO::FETCH_ASS0C);
    ?>
    <br><br>
    <h1>Users Dashboard</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="add.php">Add User</a>
</body>
</html>