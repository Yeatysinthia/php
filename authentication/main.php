<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

echo "Welcome " . $_SESSION['user'];
?>

<br><br>

<a href="logout.php">
    <button type="button">Logout</button>
</a>