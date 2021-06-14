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

$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item4 = $_POST['item4'];
$sname = $_POST['sname'];

//$q = "select * from itemlist where item1 = '$item1' && item2 = '$item2' && item3 = '$item3' ";

//$result = mysqli_query($con, $q);

//$num = mysqli_num_rows($result);

//if($num == 1){
    //echo"duplicate data";
//}else{
    $qy = " INSERT INTO `inventory` ( `item1`, `item2`, `item3`,`item4`,`cname`) VALUES ('$item1', '$item2', '$item3','$item4','$sname')" ;
    mysqli_query($con, $qy);
    header('location:../html/homepage.php');
//}

?>