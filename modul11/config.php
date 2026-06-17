<?php

$user = "root";
$pass = "root";
$server = "localhost";
$dbname = "db"

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    echo "Success"
}catch (PDOException $e)
echo "error: " $e->getMessage();
?>