<?
include('db_connect.php');

$iconname=$_FILES["icon4"] ["name"];
$type=$_FILES ["icon4"] ["type"];
$temp=$_FILES["icon4"] ["tmp_name"];
$error=$_FILES["icon4"] ["error"];


	move_uploaded_file($temp, "images/".$iconname);


$icon4="images/$iconname";

$result=mysql_query("UPDATE serv SET icon4='$icon4' ");
header('Location: services.php');



?>