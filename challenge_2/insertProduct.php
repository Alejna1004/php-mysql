<?php
$conn = new mysqli("localhost", "root", "", "products_db");

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "INSERT INTO products (name, price, description) 
        VALUES ('$name', '$price', '$description')";

$conn->query($sql);

header("Location: index.php");
?>