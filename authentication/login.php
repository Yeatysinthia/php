<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $file = file("data.txt");
    $found = false;

    foreach($file as $line){

        list($_username, $_password) = explode(",", trim($line));

        if($_username == $username && $_password == $password){
            $_SESSION['user'] = $username;
            $found = true;
            header("Location: main.php");
            exit();
        }
    }

    if(!$found){
        echo "Invalid Username or Password";
    }
}
?>

<form method="POST">
Username:<br>
<input type="text" name="username"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<input type="submit" name="login" value="Login">
</form>