<?php
$conn = new mysqli("localhost", "root", "", "products_db");

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Products</title>
</head>
<body>

<h2>Product List</h2>

<a href="addProduct.php">➕ Add Product</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['price'] ?> €</td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['created_at'] ?></td>
        <td>
            <a href="updateProduct.php?id=<?= $row['id'] ?>">✏️ Edit</a>
            <a href="deleteProduct.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">🗑️ Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>