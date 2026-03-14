<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //user define function
    function info($name)
    {
        echo"This is our class $name";
    }

    info("PWAD");
    echo "<br>";
    function add($a, $b)
    {
        echo $a + $b;
    }

    add(3,4);
    ?>
</body>
</html>