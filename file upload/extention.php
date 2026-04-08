<?php
if (isset($_POST['submitbtn'])) {
    $fileName = $_FILES['f']['name'];

    // extension বের করা
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);

    echo "File Extension: " . $ext;
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="f"><br><br>
    <input type="submit" name="submitbtn" value="Upload">
</form>