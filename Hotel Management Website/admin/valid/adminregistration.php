<?php

//session_start();
//header('location:../html/login.php');

$con = mysqli_connect('localhost', 'root');

if($con){
    echo"connection sucessful";
}else{
    echo"no connection";
}

mysqli_select_db($con, 'hotelwebsite');

$name = $_POST['name'];
//$email = $_POST['email'];
//$gender = $_POST['gender'];
//$phone = $_POST['phone'];
$password = $_POST['password'];
$password = md5($password);

$q = "select * from adminlogin where usname = '$name'  && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"duplicate data";
}else{
    $qy = " INSERT INTO `adminlogin` ( `usname`, `password`) VALUES ('$name','$password')" ;
    mysqli_query($con, $qy);
      header('location:../index.php');
}

?>