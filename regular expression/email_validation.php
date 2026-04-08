<?php



$data = "atth122@frew.com";
$p = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]{4}+\.[a-zA-Z0-9]{2,}$/";
echo preg_match_all($p,$data);



?>