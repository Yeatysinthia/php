<?php
if (isset($_POST['submitbtn'])) {

    if ($_FILES['f']['name'] != "") {

        $fileSize = $_FILES['f']['size'];

        $fileSizeKB = $fileSize / 1024;

        echo "File size: " . $fileSizeKB . " KB<br>";

        if ($fileSizeKB <= 500) {
            echo "File size OK (within 500KB)";
        } else {
            echo "File too large! Max 500KB allowed";
        }

    } else {
        echo "Please select a file!";
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="f"><br><br>
    <input type="submit" name="submitbtn" value="Upload">
</form>