<!DOCTYPE html>
<html>
<body>

<?php
$abc =$_POST['number'];

$fgh =(Int)$abc;
echo "number with out color = ".$fgh;
 function color($jkl){
if ($jkl <= 50) {
  echo "<h1 style='color:red;'>".$jkl."</h1>";
} elseif ($jkl > 50 && $jkl < 75 ) {
 echo "<h1 style='color:orange;'>".$jkl."</h1>";
} else {
  echo "<h1 style='color:green;'>".$jkl."</h1>";
}
}
color($fgh);
?>
</body>
</html>