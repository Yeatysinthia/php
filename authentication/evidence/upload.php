<?php
session_start();

if(isset($_POST['username'])){
    $_SESSION['user'] = $_POST['username'];

    $dir = "uploads/";
    if(!is_dir($dir)){
        mkdir($dir);
    }

    $file = $dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $file);

    header("Location: dashboard.php");
    exit();
}
?>