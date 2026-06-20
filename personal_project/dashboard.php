<?php
session_start();
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/helpers.php";

if (!isset($_SESSION["user_id"])) {
    redirect_to("login.php");
}

$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "User";

$books = [];
$result = mysqli_query($conn, "SELECT * FROM user ORDER BY id");

while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Library Dashboard</title>
    <link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css
"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
    <style>
        .book-poster {
            height: 320px;
            object-fit: cover;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-dark bg-dark px-4 border-bottom border-secondary">
    <span class="navbar-brand">HeartStudios Library</span>
    <div>
        <a href="dashboard.php" class="btn btn-light btn-sm me-2">Dashboard</a>
        <span class="text-light me-3">Welcome, <?php echo safe_text($username); ?>!</span>
    </div>
</nav>

<div class="container mt-5">
    <h3>Welcome to your digital library</h3>
    <p class="text-muted">You are logged in as a regular user</p>

    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="books.php">Books</a></button>
    </div>

    <div class="row g-4">
        <?php if (count($books) == 0): ?>
            <div class="col-12">
                <div class="alert alert-info">No books are available right now.</div>
            </div>
        <?php endif; ?>

        <?php foreach ($books as $books): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <img src="<?php echo safe_text(book_image_url($book["book_image"])); ?>"
                         class="card-img-top book-poster"
                         alt="<?php echo safe_text($book["book_name"]); ?> poster">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo safe_text($book["book_desc"]); ?></h5>
                        <p class="card-text text-muted"><?php echo safe_text($book["book_desc"]); ?></p>
                        <p class="mb-1"><strong>Rating:</strong> <?php echo safe_text($book["book_rating"]); ?></p>
                        <p class="mb-3"><strong>Price:</strong> <?php echo safe_text($book["book_price"]); ?></p>
                        <a href="books.php" class="btn btn-primary mt-auto">Book Movie</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php render_footer(); ?>



<script src="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js
"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>
</html> 