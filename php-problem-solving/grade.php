<?php
function getGrade($score) {
    $grade = "";

    if ($score >= 90) {
        $grade = "A";
    } elseif ($score >= 80) {
        $grade = "B";
    } elseif ($score >= 70) {
        $grade = "C";
    } elseif ($score >= 60) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    return $grade; 
}

$result = "";

if (isset($_POST['score'])) {
    $score = $_POST['score'];
    $result = getGrade($score);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>

<form method="post">
    Enter Number: 
    <input type="number" name="score" required>
    <input type="submit" value="Get Grade">
</form>

<?php
if ($result !== "") {
    echo "The grade is: " . $result;
}
?>

</body>
</html>
