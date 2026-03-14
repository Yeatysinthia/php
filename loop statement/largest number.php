<form method="post">
    Enter Number 1: <input type="number" name="num1"><br><br>
    Enter Number 2: <input type="number" name="num2"><br><br>
    Enter Number 3: <input type="number" name="num3"><br><br>

    <input type="submit" name="submit" value="Find Largest">
</form>

<?php
if (isset($_POST['submit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "Largest Number is: " . $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "Largest Number is: " . $num2;
    } else {
        echo "Largest Number is: " . $num3;
    }
}
?>