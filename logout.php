<?php

/*$cookie_name = 'PHPSESSID';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);*/

if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
	unset($_SESSION['user']);
	unset($_SESSION['pass']);
}
unset($_SESSION["login"]);
session_start();
session_destroy() ;
 header('location:index.php');
 
 ?>