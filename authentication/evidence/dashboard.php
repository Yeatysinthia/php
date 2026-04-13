<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

<style>
body { margin:0; font-family: Arial; }

.navbar {
    background:#333;
    color:white;
    padding:15px;
    display:flex;
    justify-content:space-between;
}

.navbar a {
    color:white;
    text-decoration:none;
    margin-left:15px;
}

.container {
    padding:20px;
}
</style>

<script>
// session check
setInterval(()=>{
    fetch('check_session.php')
    .then(res => res.text())
    .then(data => {
        if(data === 'logout'){
            window.location.href = 'login.php';
        }
    });
},2000);

// logout sync across tabs
window.addEventListener("storage", function(e){
    if(e.key === "logout"){
        window.location.href = "login.php";
    }
});
</script>

</head>
<body>

<div class="navbar">
    <div>My App</div>
    <div>
        Welcome, <?php echo $_SESSION['user']; ?>
        <a href="logout.php">Logout</a>
    </div>
</div>
</body>
</html>