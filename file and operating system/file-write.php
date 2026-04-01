<!-- file write -->
 <?php
 $r = fopen("store.txt", "w");
 $ur = "this is new file";
 fwrite($r, $ur);
 fclose($r);

 
 
 ?>