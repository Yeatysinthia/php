<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("Constant", "Hello world.");
        // echo CONSTANT; // outputs "Hello world."
        echo Constant; // Emits an Error: Undefined constant "Constant"
                    // Prior to PHP 8.0.0, outputs "Constant" and issues a warning.
    ?>

</body>
</html>