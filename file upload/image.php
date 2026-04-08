<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST['submitbtn'])) {
    $fileName = $_FILES['f']['name'];
    $tmp = $_FILES['f']['tmp_name'];
    $s = "img/";
    move_uploaded_file("$tmp", "$s.$fileName");
    echo "Image uploaded!";

}
?>
<body>
    <form method="post" enctype="multipart/form-data">
    Select Image:
    <input type="file" name="f"><br><br>
    
    <input type="submit" name="submitbtn" value="Upload">
</form>
</body>
</html>