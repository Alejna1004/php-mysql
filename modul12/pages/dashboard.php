<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<?php include '../incudes/header.php'?>
<div>
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!!!</h2>
</div>

<?php include '../includes/footer.php'; ?>

