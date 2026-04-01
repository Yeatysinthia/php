<?php

// file_put_contents(filename, data, mode, context)
$write = file_put_contents("store1.txt", "hello\n", FILE_APPEND);
echo "successfully";

echo file_get_contents("store1.txt");


?>