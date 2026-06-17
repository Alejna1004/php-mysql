<?php
include("config.php");

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
      $query = "INSERT INTO users (name, username, email, password, confirm_password, is_admin)
          VALUES ('$name', '$username', '$email', '$password', '$confirm_password', 0)";
        mysqli_query($conn, $query);
        header("Location: login.php");
        exit();
    } else {
        $error = "Passwords do not match!";
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Management System - Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
          crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <h2 class="mb-4 text-center">Sign Up</h2>

            <?php if(isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST">

                <div class="mb-3">
                    <input type="text" 
                           class="form-control" 
                           name="name" 
                           placeholder="Name" 
                           required>
                </div>

                <div class="mb-3">
                    <input type="text" 
                           class="form-control" 
                           name="username" 
                           placeholder="Username" 
                           required>
                </div>

                <div class="mb-3">
                    <input type="email" 
                           class="form-control" 
                           name="email" 
                           placeholder="Email" 
                           required>
                </div>

                <div class="mb-3">
                    <input type="password" 
                           class="form-control" 
                           name="password" 
                           placeholder="Password" 
                           required>
                </div>

                <div class="mb-3">
                    <input type="password" 
                           class="form-control" 
                           name="confirm_password" 
                           placeholder="Confirm Password" 
                           required>
                </div>

                <button type="submit" name="signup" class="btn btn-primary w-100">Sign Up</button>

                <p class="text-center mt-3">
                    Already have an account? <a href="login.php">Login here</a>
                </p>

            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
        crossorigin="anonymous"></script>
</body>
</html>