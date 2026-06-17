<?php
$host = "localhost";
$db = "my_db";
$user = "root"
$pass = "";

echo "Success"

try{
    $pdo = new PDO("mysql:$host, dbname:$db, $user, $pass")
    $sql = "CREATE TABLE users (ID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL";

    $pdo->exec($sql);
    
    echo "Table created successfully"; 
} catch(Exception $e){
    echo "Error creating table: ".$e->getMessage();
}
?>