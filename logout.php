<?php
 //set the cookie to expire
setcookie('username','',1);

//and redirect the user to the login
header("Location: login.php");
exit;
?>
