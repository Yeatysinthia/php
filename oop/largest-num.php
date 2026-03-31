<!DOCTYPE html>
<html>
<body>
<form method="post">
    Number 1: <input type="number" name="a"><br>
    Number 2: <input type="number" name="b"><br>
    Number 3: <input type="number" name="c"><br>
    <input type="submit" value="Find Largest">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];

    $largest = max($a, $b, $c);
    echo "The largest number is $largest";
}
?>
</body>
</html>