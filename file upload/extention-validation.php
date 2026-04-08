<?php
if (isset($_POST['submitbtn'])) {

    $fileSize = $_FILES['f']['size']; // size in bytes

    // byte থেকে KB করা
    $fileSizeKB = $fileSize / 1024;

    echo "File size: " . $fileSizeKB . " KB<br>";

    // 500KB validation
    if ($fileSizeKB <= 500) {
        echo "File size OK (within 500KB)";
    } else {
        echo "File too large! Max 500KB allowed";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="f"><br><br>
    <input type="submit" name="submitbtn" value="Upload">
</form>