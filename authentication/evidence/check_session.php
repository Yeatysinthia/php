<?php
session_start();

if(!isset($_SESSION['user'])){
    echo "logout";
}else{
    echo "active";
}
?>