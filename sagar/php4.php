<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11,10,8,20,12,5);
sort($numbers);// array sorted
echo "printing sorted array through loop <br>";
$arrlength = count($numbers);//printing sorted array through loop
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
//sum of the array elements using for loop
$sum = 0;
for ($i = 0; $i <=count($numbers); $i++) {
	$sum +=$number[$i] ;
}
echo "sum from 2 to 22 ". "=".$sum.'<br>';
echo "on dividing by 4 = ";
$divide = $sum/4;
echo $divide."<br>";//printed calculated value on division by 4

//directly printed the array without addition
echo "Array without addition of new entry = ";
print_r ($numbers);
echo "<br>";
//Adding new calculated entry to the array
echo "directly printed the new added entry with print_r = ";
array_push($numbers,$divide);
print_r($numbers);
echo "<br>";
//printing array with loop
echo "printing array with loop = <br>";
$length = count($numbers);
for($y = 0; $y<$length; $y++) {
  echo $numbers[$y];
  echo "<br>";
}
/*function myTest() {
  $GLOBALS['z'] = $GLOBALS['numbers'] + $GLOBALS['divide'];
} 
myTest();
echo $z;*/
?>

</body>
</html>