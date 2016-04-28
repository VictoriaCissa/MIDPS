<?
include('db_connect.php');

$logoname=$_FILES["logo"] ["name"];
$type=$_FILES ["logo"] ["type"];
$temp=$_FILES["logo"] ["tmp_name"];
$error=$_FILES["logo"] ["error"];

	move_uploaded_file($temp, "images/".$logoname);


$logo="images/$logoname";
$result=mysql_query("UPDATE header SET logo='$logo' ");
header('Location: land_header.php');



?>