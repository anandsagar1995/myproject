<!DOCTYPE html>
<html>
<body>

<?php
//case sensitive
$color = "red";
echo "My car is " . $color . "<br>";
//echo "My house is " . $COLOR . "<br>";
//echo "My boat is " . $coLOR . "<br>";
//global scope variable
$x = 5;
$y = 10;
function myTest() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
myTest();
echo $z;
echo "<br>";

// static scope
function first() {
  static $x = 0;
  echo $x;
  $x++;
}
first();
echo "<br>";
first();
echo "<br>";
first();
echo "<br>";
//string reversed
echo "Reversed string = ";
echo strrev("my name is sagar");
echo "<br>";
//searching string position in the given string
echo "position of 'is' in the string 'my name is sagar' = ";
echo strpos("my name is sagar","is");
echo "<br>";
//words count of the string
echo "no. of words in the string 'hello to all' = ";
echo str_word_count("hello to all");
echo "<br>";
//associative array

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
print_r($persons);
echo 'unsorted associative array.<br>';
 //printed array
echo ""; 
echo "John is a " . $persons["John"];//printed specific value with respect to the key
echo "<br>";
//sorting the associative array with respect to its key
ksort($persons);
print_r($persons);
echo "sorted associative array";
echo "<br>";
//array element count
echo "counted array entries of person array =";
echo count($persons);
echo "<br>";
// math functions
//square root
echo "square root of the number = ";
echo(sqrt(9) . "<br>");
//round function
echo "rounding off the integer = ";
echo(round(-4.40) . "<br>");
//ceil function round the number up to the nearest integer
echo "rounding off using ceil = <br>";
echo(ceil(0.60) . "<br>");
echo(ceil(-5.1) . "<br>");

//To round a number down to the nearest integer
echo "roundin off using floor = <br>";
echo(floor(0.60) . "<br>");
echo(floor(-5.1) . "<br>");
//PHP min() and max() Functions
echo "min and max function = <br>";
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";
//array sorting
echo "Sorting array enteries of unsorted array = <br>";
$numbers = array(4, 6, 2, 22, 11,10,8,20,12,5);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";}
//encoding and decoding

$firstname = "anand";
$secondname = "sagar";
$home = "hamirpur";
?>
<a href="backup.php?hobby=<?php echo $firstname.','.$secondname.','.$home; ?>">click here</a>

</body>
</html>