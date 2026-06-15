<?php
$name = "localhost";
$username = "root";
$email = "";
$password = "localhost";

$conn = mysqli_connect($name, $username, $email, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?> 