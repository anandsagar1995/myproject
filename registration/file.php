<?php
$myfile = fopen("sagar.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sagar.txt"));
fclose($myfile);
?>