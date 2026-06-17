<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h2>New Product</h2>

<form action="insertProduct.php" method="POST">
    Name: <input type="text" name="name" required><br><br>
    Price: <input type="number" step="0.01" name="price" required><br><br>
    
    Description:<br>
    <textarea name="description" required></textarea><br><br>

    <button type="submit">Save</button>
</form>

<a href="index.php">⬅ Back</a>

</body>
</html>