<?
setcookie("login", $_POST['login'],time()+3600*24, "/");
setcookie("password", md5($_POST['password']),time()+3600*24, "/");

include('protection.php');

if($_COOKIE['login']==$log && $_COOKIE['password']==$pass){
	header('location: land_header.php');
}

else{

	header('location: reg.php');
}



?>