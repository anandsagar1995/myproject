<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$name = $email = $gender = $number = $address="";
$nameErr = $emailErr = $genderErr = $numberErr = $addressErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST['click'])){
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
if (empty($_POST["number"])) {
    $numberErr = "number is required";
  } else {
    $number = test_input($_POST["number"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$number)) {
      $numberErr = "Only letters and white space allowed";
    }
  }

 if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) {
      $addressErr = "Only letters and white space allowed";
    }
}

$sql = "INSERT INTO register (name, email, gender,number,address)
VALUES ('$name', '$email', '$gender','$number','$address')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



echo "INPUT = <br>";
echo "Name is => ".$name."<br>";
echo "Email is => ".$email."<br>";
echo "Gender is => ".$gender."<br>";
echo "Number is => ".$number."<br>";
echo "Address is => ".$address."<br><br><br><br>";

include "html/registration.php";
mysqli_close($conn);
?>

