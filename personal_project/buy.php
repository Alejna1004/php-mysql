<?php
session_start();
$name = "localhost";
$username = "root";
$password = "";
$database = "personal_project";

$conn = new mysqli($name, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["place_order"])) {

    $email = $_POST["email"];
    $account_number = $_POST["account_number"];
    $address = $_POST["address"];
    $product = $_POST["product"];

    $stmt = $conn->prepare("
        INSERT INTO orders
        (email, account_number, address, product)
        VALUES (?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssss",
        $email,
        $account_number,
        $address,
        $product
    );

    if ($stmt->execute()) {
        echo "<h2>Order successfully placed!</h2>";
    } else {
        echo "<h2>Error: " . $stmt->error . "</h2>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buy now</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.container{
    background:#fff;
    padding:30px;
    border-radius:10px;
    width:400px;
    box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input, textarea{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
}

button{
    width:100%;
    padding:12px;
    background:#28a745;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#218838;
}
</style>

</head>
<body>

<div class="container">

    <h2>Your book will arrive soon! Just write down your...</h2>

    <form method="POST">

        <label>Product</label>
        <input type="text" name="product" value="Your book :)" readonly>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Account Number</label>
        <input type="text" name="account_number" required>

        <label>Address</label>
        <textarea name="address" required></textarea>

        <button type="submit">
            <a href="books.php">Buy Now</a>
        </button>

    </form>

</div>

</body>
</html>