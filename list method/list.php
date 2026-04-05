<?php

$a = [
    [1, "sinthia", 22, "sinthia@gmail.com", "+0929817"],
    [2, "sinthia", 22, "sinthia@gmail.com", "+0929817"],
    [3, "sinthia", 22, "sinthia@gmail.com", "+0929817"],
    [4, "sinthia", 22, "sinthia@gmail.com", "+0929817"],

];

foreach ($a as list($id, $name, $age, $email, $number)) {
    echo "$id | $name | $age | $number | $email <br>";
}


$files = file("data.txt");


foreach ($files as $file) {
    list($x, $y, $z) = explode(",","$file");
    echo "ID:" . $x . " " . "Name:" . $y . " " . "Address:" . $z . "<br>";
}


?>