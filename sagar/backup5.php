<!doctype html>
<html>
<head>
	<title>backup</title>
</head>
<body>
	<?php
//$date= $_POST["birthday"];
$day= $_POST["day"];
$month= $_POST["month"];
$year= $_POST["year"];
//echo $date;

function daye($eday,$emonth,$eyear){
	echo date("l",mktime(05,00,00,$eday,$emonth,$eyear));
}
daye($day,$month,$year);

/*function birthday($day) {
echo mktime(0,0,0,$day);
}
birthday($day);*/
?>
	</body>
	</html>