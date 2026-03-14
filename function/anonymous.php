<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $add = function ($a) {
        echo "hello $a ";
    };
    $add("world");

    //arrow function
    $functionvarName = fn() =>"hello";
    echo $functionvarName();
    $a = function () {};

    $b = fn($a, $b) => "";

    //arrow sum
    $add = fn($a, $b) => $a + $b;

    echo $add(5, 3);

    //arrow substraction
    $sub = fn($a, $b) => $a - $b;

    echo $sub(10, 4); 

    //multiplication
    $mul = fn($a, $b) => $a * $b;

    echo $mul(5, 4);
    //division
    $div = fn($a, $b) => $a / $b;

    echo $div(20, 5);
    ?>
</body>
</html>