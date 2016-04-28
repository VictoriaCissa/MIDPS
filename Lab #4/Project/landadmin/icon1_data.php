<?
include('db_connect.php');

$iconname=$_FILES["icon1"] ["name"];
$type=$_FILES ["icon1"] ["type"];
$temp=$_FILES["icon1"] ["tmp_name"];
$error=$_FILES["icon1"] ["error"];


	move_uploaded_file($temp, "images/".$iconname);


$icon1="images/$iconname";

$result=mysql_query("UPDATE serv SET icon1='$icon1' ");
header('Location: services.php');



?>