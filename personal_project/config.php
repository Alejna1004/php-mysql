
<?php
$name = "localhost";
$username = "root";
$password = "";
$database = "personal_project";

$conn = mysqli_connect($name, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?> 