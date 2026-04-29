<?php
$conn = new mysqli("localhost", "root", "", "products_db");

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $conn->query("UPDATE products 
                  SET name='$name', price='$price', description='$description' 
                  WHERE id=$id");

    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $product['name'] ?>" required><br><br>
    Price: <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required><br><br>
    
    Description:<br>
    <textarea name="description" required><?= $product['description'] ?></textarea><br><br>

    <button type="submit">Update</button>
</form>

<a href="index.php">⬅ Back</a>

</body>
</html>