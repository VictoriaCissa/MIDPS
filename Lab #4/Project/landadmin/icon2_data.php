<?
include('db_connect.php');

$iconname=$_FILES["icon2"] ["name"];
$type=$_FILES ["icon2"] ["type"];
$temp=$_FILES["icon2"] ["tmp_name"];
$error=$_FILES["icon2"] ["error"];


	move_uploaded_file($temp, "images/".$iconname);


$icon2="images/$iconname";

$result=mysql_query("UPDATE serv SET icon2='$icon2' ");
header('Location: services.php');



?>