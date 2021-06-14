<?php

session_start();

if(isset ($_COOKIE['new'])){
setcookie('new',"",time()-3600,'/');
}

session_destroy();
header('location:../index.php');



?>