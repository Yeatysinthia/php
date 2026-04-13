<?php
session_start();
session_destroy();
?>

<script>
localStorage.setItem("logout", Date.now());
window.location.href="login.php";
</script>