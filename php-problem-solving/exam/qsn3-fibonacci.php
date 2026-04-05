<?php

$n = 8; 

$a = 0;
$b = 1;

echo "Fibonacci Series: ";

for ($i = 0; $i < $n; $i++) {
    echo $a . " ";
    
    $next = $a + $b;
    $a = $b;
    $b = $next;
}

?>