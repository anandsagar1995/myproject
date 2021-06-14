<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "password";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$file = fopen("filed.csv",mode:"r");
$i= 0;
while (($stdata = fgetcsv($file, length: 10000, separator:',')) !== FALSE)
{
    print_r($stdata);
    $i++;
    if($i==1) continue;
    $sql = "INSERT into base(id,name,dob) value ('$stdata[0]','$stdata[1]','$stdata[2]')";
    $res=mysqli_query($conn,$sql);
}
fclose($file);

?>