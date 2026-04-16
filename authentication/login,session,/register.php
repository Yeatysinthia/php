<?php
session_start();

$msg = "";

if(isset($_POST["register"])){

    $us = trim($_POST["user"]);
    $pa = trim($_POST["pass"]);

    if(!filter_var($us, FILTER_VALIDATE_EMAIL)){
        $msg = "Invalid email format!";
    }
    elseif(strlen($pa) < 8){
        $msg = "Password must be at least 8 characters!";
    }
    else {

        $file = __DIR__ . "/data.txt";

        if(!file_exists($file)){
            file_put_contents($file, "");
        }

        $lines = file($file);
        $exists = false;

        foreach($lines as $line){
            $parts = explode(",", trim($line));
            if(count($parts) < 2) continue;

            if($parts[0] == $us){
                $exists = true;
                break;
            }
        }

        if($exists){
            $msg = "User already exists!";
        } else {

            $hash = password_hash($pa, PASSWORD_DEFAULT);

            file_put_contents($file, $us . "," . $hash . "\r\n", FILE_APPEND);

            $msg = "Registration successful!";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  background: #e3f2fd;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Box Design */
.box {
  background: #ffffff;
  padding: 20px;
  width: 300px;
  border-radius: 8px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.1);
  text-align: center;
}

/* Heading */
h2 {
  margin-bottom: 15px;
}

/* Input Fields */
input {
  width: 100%;
  padding: 8px;
  margin: 6px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Button */
button {
  width: 100%;
  padding: 8px;
  background: #ccbd7a;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background: #f31c00;
}

/* Message */
.msg {
  font-size: 13px;
  margin-bottom: 10px;
  color: red;
}
</style>

</head>
<body>

<div class="box">
<h2>Register</h2>

<div class="msg"><?php echo $msg; ?></div>

<form method="post">
<input type="text" name="user" placeholder="Email" required>
<input type="password" name="pass" placeholder="Password" required>

<button name="register">Register</button>
</form>

<br>
<a href="login.php">Go to Login</a>

</div>

</body>
</html>