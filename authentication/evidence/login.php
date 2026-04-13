<?php
session_start();
if(isset($_SESSION['user'])){
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; text-align:center; margin-top:100px; }
        form { display:inline-block; padding:20px; border:1px solid #ccc; }
    </style>
</head>
<body>

<h2>Login & Upload</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Enter Username" required><br><br>
    <input type="file" name="file" required><br><br>
    <button type="submit">Login & Upload</button>
</form>

</body>
</html>