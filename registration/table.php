<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: orange;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<?php
session_start();
echo $_SESSION['mg'];
echo $_SESSION['sname'];
//echo $_SESSION['nameee'];
//echo $_SESSION['passworddd'];
echo "<br>";
echo "Today is " . date("Y@m@d") . "<br>";



echo "<a href='logout.php'>Go to the LOG OUT page</a>";



/*$same = $_SESSION['nameee'];
$sassword = $_SESSION['passworddd'];

$cookie_name = "user";
$cookie_value = $same;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

$cookie_psw = "psw";
$cookie_val = $sassword;
setcookie($cookie_psw, $cookie_val, time() + (86400 * 30), "/"); 
echo "<br>";
  echo $cookie_name;
echo "<br>";
  echo  $cookie_value;
 echo "<br>";
echo "<br>";
  echo $cookie_psw;
echo "<br>";
  echo  $cookie_val;
 echo "<br>";
print_r($_COOKIE);*/

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

$sql = "SELECT * FROM register";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>gender</th>";
                echo "<th>number</th>";
                echo "<th>address</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
echo "<br>";
echo "<h1>using where condition</h1>";

$sql = "SELECT id,name,address FROM register where name='sagar'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>address</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo "<br>";
echo "<h1>using limit and offset</h1>";
$sql = "SELECT * FROM register LIMIT 7 OFFSET 6 ";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>name</th>";
                echo "<th>email</th>";
                echo "<th>gender</th>";
                echo "<th>number</th>";
                echo "<th>address</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
echo "<br>";


// closing the connection
mysqli_close($conn);
?>
</body>
</html>