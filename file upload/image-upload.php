<?php
if (isset($_POST['submitbtn'])) {

    $fileName = $_FILES['f']['name'];
    $tmp = $_FILES['f']['tmp_name'];

    $path = "img/" . $fileName;

    move_uploaded_file($tmp, $path);

    $fileSize = $_FILES['f']['size'];
    $fileSizeKB = $fileSize / 1024;

    echo "File size: " . $fileSizeKB . " KB<br>";

    if ($fileSizeKB <= 500) {
        echo "File size OK (within 500KB)<br>";
    } else {
        echo "File too large! Max 500KB allowed<br>";
    }

    // ✅ image show
    echo "<img src='$path' width='400px'>";
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="f"><br><br>
    <input type="submit" name="submitbtn" value="Upload">
</form>