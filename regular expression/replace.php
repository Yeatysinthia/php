<?php
$a = "hello Bangladesh";
$patter = "/Bangladesh/i";
echo preg_replace($patter, "world" , $a ); 

?>