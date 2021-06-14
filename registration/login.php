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
  session_start();
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
if (isset($_COOKIE['un'])){
  $location = 'table.php';
header(header:"Location: {$location}");
}

$sql = "SELECT * FROM passwrd WHERE Username = '$name' AND Password = '$password' ";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      setcookie('un',$password,time() + (86400*2),"/");
$location = 'table.php';
header(header:"Location: {$location}");
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$_SESSION['mg'] =" you are logged in successfully  ";
$_SESSION['sname'] = " sagar";
//$_SESSION['nameee'] = $name;
//$_SESSION['passworddd'] = $password;
?>
</form> 
</body>
</html>