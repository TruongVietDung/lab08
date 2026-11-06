
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<?php include 'header.inc'; ?>

<h2>Welcome!</h2>

<?php
echo "Hello, ". $_SESSION['user'] . "! You have successfully logged in. Your token is: " . $_SESSION['token'];
?>

<?php include 'footer.inc'; ?>