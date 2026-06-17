<?php 
    include '../includes/header.php'; 
    include '../config/database.php';
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password)
    VALUES ('$name', '$email', '$hashedPassword')";

    if ($conn->query($sql)){
        echo "Registration successful!";
    }else{
        echo "Error: " . $conn->error;
    }
    }
    ?>

<div class="container" mt-5>
    <h2>Sign Up</h2>
    <form action="">
        <input type="text" class="form-control mb-3" placeholder="Full name">
        <input type="email" class="form-control mb-3" placeholder="Email">
        <input type="password" class="form-control mb-3" placeholder="Password">
        <input type="password" class="form-control mb-3" placeholder="Confirm password">
        
        <button class="btn btn-success">Register</button>
    </form>
</div>
<?php include '../includes/footer.php'; ?>