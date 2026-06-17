<?php
    $username = $_GET['username'] ?? "";
    $password = $_GET['password'] ?? "";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";  echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our PHP form</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="username"></br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>