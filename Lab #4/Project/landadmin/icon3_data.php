<?
include('db_connect.php');

$iconname=$_FILES["icon3"] ["name"];
$type=$_FILES ["icon3"] ["type"];
$temp=$_FILES["icon3"] ["tmp_name"];
$error=$_FILES["icon3"] ["error"];


	move_uploaded_file($temp, "images/".$iconname);


$icon3="images/$iconname";

$result=mysql_query("UPDATE serv SET icon3='$icon3' ");
header('Location: services.php');



?>