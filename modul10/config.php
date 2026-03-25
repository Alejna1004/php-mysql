<?php
session_start();

$user = "root";
$password = "root";
$host = "localhost";
$db = "module_10";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Connection failed: " . $e->getMessage())
}
?>