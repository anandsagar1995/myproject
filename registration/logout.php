<?php
if(isset ($_COOKIE['un'])){
setcookie('un',"",time()-3600,'/');
echo "<a href='login.php'>Go back to the login page</a>";
}
?>