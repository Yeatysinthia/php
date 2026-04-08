<?php 


$data = "atth@122";
$p = "/^[a-zA-Z0-9@$&#^+=]{4,8}$/";
echo preg_match_all($p,$data);






?>