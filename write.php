<?php
   //file_put_contents("write.txt", "this is some content");
   $myfile = fopen("write.txt", "a") or die("Unable to open file!");
   $txt = "John Doe\n";
   fwrite($myfile, $txt);
   fclose($myfile);
   $text = "This is the better file\n";
   file_put_contents("write.txt", $text, FILE_APPEND);

?>
