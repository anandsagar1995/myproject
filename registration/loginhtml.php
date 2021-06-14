<!DOCTYPE HTML>  
<html>
<head>
	<title>LOGIN</title>
	<style>
		.error {
			color:red;
		}
	</style>
</head>
<body>
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

$name = $password="";
$nameerr = $passworderr="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
 if (empty($_POST["password"])) {
    $passworderr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
      $passworderr = "Only letters and white space allowed";
    }
  }
}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$password= md5($password);
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["SCRIPT_NAME"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<br><span class="error">* <?php echo $nameerr;?></span>
  <br><br>
Password: <input type="password" name="password"value="<?php echo $password;?>"><br><br><span class="error">* <?php echo $passworderr;?></span>
  <br><br>

<input type="submit" name ="click">



<?php

$sql = "INSERT INTO passwrd (username, password)
VALUES ('$name', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

   ?>

?>
</form> 
</body>
</html>