<!DOCTYPE html>
<html>
<body>

<?php
$name="Anandsagar";
$encode=convert_uuencode($name);
?>
<a href="backup2.php?id=<?php echo urlencode($encode); ?>">click me</a>
</body>
</html> 