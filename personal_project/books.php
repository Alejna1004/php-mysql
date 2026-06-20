<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our current books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">

    <style>
        .book-container {
            display: flex;
            flex-wrap: wrap;
            gap: 70px;
            padding: 70px;
        }
    </style>
</head>

<body class="p-3 mb-2 bg-warning-subtle text-warning-emphasis">

<nav class="navbar p-3 mb-2 bg-success-subtle text-success-emphasis">
    <span class="navbar-brand">HeartStudios Library</span>
    <div>
        <a href="dashboard.php" class="btn btn-light btn-sm me-2">Dashboard</a>
    </div>
</nav>

<div class="book-container">

    <div class="card" style="width: 18rem;">
        <img src="images/book1.png" class="card-img-top" alt="white fox 1" height="380px" width="185px">
        <div class="card-body">
            <h5 class="card-title">The Call of the Moonstone</h5>
            <p class="card-text">In this book starts the adventure of the white fox called Dilah, on the journey to find the moonstone.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating: <img src="images/5stars.png" alt="prefect rating" height="30px" width="100px"></li>
            <li class="list-group-item">Price <h5>14,95€</h5></li>
        </ul>
        <div class="card-body">
            <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="buy.php">Buy now</a></button>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="images/book2.png" class="card-img-top" alt="white fox 2" height="380px" width="185px">
        <div class="card-body">
            <h5 class="card-title">The Search for the Hidden Source</h5>
            <p class="card-text">The adventure of Dilah goes on: discover their journey and the problems they face on the way</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating: <img src="images/4,5stars.png" alt="almost prefect rating" height="30px" width="100px"></li>
            <li class="list-group-item">Price<h5>14,95€</h5></li>
        </ul>
        <div class="card-body">
            <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="buy.php">Buy now</a></button>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="images/book3.png" class="card-img-top" alt="white fox 3" height="380px" width="185px">
        <div class="card-body">
            <h5 class="card-title">On the Path of Destiny</h5>
            <p class="card-text">As their journey goes on, they find new friends and learn lots of new interesting things, wanna know them too?</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating: <img src="images/5stars.png" alt="prefect rating" height="30px" width="100px"></li>
            <li class="list-group-item">Price<h5>14,95€</h5></li>
        </ul>
        <div class="card-body">
            <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="buy.php">Buy now</a></button>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="images/book4.png" class="card-img-top" alt="white fox 4" height="380px" width="185px">
        <div class="card-body">
            <h5 class="card-title">The Gateway of Destiny</h5>
            <p class="card-text">Here ends the story of Dilah and his friends, but it goes on with another special character...</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating: <img src="images/4stars.png" alt="good rating" height="30px" width="100px"></li>
            <li class="list-group-item">Price<h5>14,95€</h5></li>
        </ul>
        <div class="card-body">
            <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="buy.php">Buy now</a></button>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="images/book5.png" class="card-img-top" alt="white fox 5" height="380px" width="185px">
        <div class="card-body">
            <h5 class="card-title">The Secret of the Silver Tree</h5>
            <p class="card-text">The backstory of Master Rubion more detailed, if you want to know who he is, read the previous books</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating: <img src="images/4,5stars.png" alt="almost prefect rating" height="30px" width="100px"></li>
            <li class="list-group-item">Price<h5>14,95€</h5></li>
        </ul>
        <div class="card-body">
            <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="buy.php">Buy now</a></button>
        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <img src="images/book6.png" class="card-img-top" alt="white fox 6" height="380px" width="185px">
        <div class="card-body">
            <h5 class="card-title">Setting off for the Black Lake</h5>
            <p class="card-text">Unfortunately the last book, but it has a inspiring and beautiful story of Rubions best friend</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Rating: <img src="images/5stars.png" alt="prefect rating" height="30px" width="100px"></li>
            <li class="list-group-item">Price<h5>14,95€</h5></li>
        </ul>
        <div class="card-body">
            <button href="buy.php" type="button" class="btn btn-info"><a class="link-offset-2 link-underline link-underline-opacity-0" href="buy.php">Buy now</a></button>
        </div>
    </div>

</div>
<footer class="border-top bg-success-subtle text-muted py-3 mt-auto">
        <div class="container text-center small">
            HeartStudios Library &copy; <?php echo date("Y"); ?>
        </div>
    </footer>
</body>
</html>
