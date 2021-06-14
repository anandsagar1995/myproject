<?php
$file = fopen("sagar.txt", "r") or die("Unable to open file!");
echo fread($file,filesize("sagar.txt"));
fclose($file);
?>