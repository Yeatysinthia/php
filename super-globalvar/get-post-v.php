<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>super global variable</h1>
    $_REQUEST,$_GET,$_POST

    <?php
  echo $_GET['n'];

    ?>
    <div>
        <form action="" method="get">
            Name:
            <input type="text" name="n">
            <input type="submit" value="Submit">

        </form>
    </div>
</body>
</html>