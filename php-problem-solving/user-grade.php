<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter Marks: <input type="number" name="marks">
    <input type="submit" name="submit" value="Check Grade">
</form>

<?php
if (isset($_POST['submit'])) {
    $marks = $_POST['marks'];

    if ($marks >= 80) {
        echo "Grade: A+";
    } elseif ($marks >= 70) {
        echo "Grade: A";
    } elseif ($marks >= 60) {
        echo "Grade: A-";
    } elseif ($marks >= 50) {
        echo "Grade: B";
    } elseif ($marks >= 40) {
        echo "Grade: C";
    } elseif ($marks >= 33) {
        echo "Grade: D";
    } else {
        echo "Grade: F";
    }
}
?>
</body>
</html>