<!DOCTYPE html>
<html>
<body>

<?php
$name="Anand sagar";
$age=23;
$hello=convert_uuencode($name);
$hi=convert_uuencode($age);
?>
<a href="backup3.php?<?php echo urlencode($hello&$hi); ?>">cllick me</a>
</body>
</html> 