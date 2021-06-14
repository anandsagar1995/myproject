<?php

session_start();


$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection sucessful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'hotelwebsite');

//cook
if (isset($_COOKIE['new'])){
  $location = '../html/homepage.php';
header(header:"Location: {$location}");
}

//cook


$name = $_POST['name'];
$password = $_POST['password'];
$password = md5($password);
$q = "select * from signin where name = '$name' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
//cook
setcookie('new',$password,time() + (86400*2),"/");
//print_r($_COOKIE);
//cook
    $_SESSION['username'] = $name;
    header('location:../html/homepage.php');

}else{
    header('location:../html/login.php');
}

?>