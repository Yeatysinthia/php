<?php 

function findLargestNumber($a, $b, $c) {
    $largest = null;

    if ($a > $b && $a>$c) {
        $largest = $a;
    }

    if ($b > $a && $b > $c) {
        $largest = $b;
    }

	if ($c > $a && $c>$b) {
        $largest = $c;
    }

    return $largest; 
}


$a = 67;
$b = 206;
$c = 150;


$result = findLargestNumber($a, $b, $c);


echo "The largest number among $a, $b, and $c is: $result";
?>