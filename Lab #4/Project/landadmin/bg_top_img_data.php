<?
include('db_connect.php');
$bgname=$_FILES["bg_top_img"]["name"];
$type=$_FILES["bg_top_img"]["type"];
$temp=$_FILES["bg_top_img"]["tmp_name"];
$error=$_FILES["bg_top_img"]["error"];


	move_uploaded_file($temp, "images/".$bgname);


$name="images/bg_top";


$bg_top_img="images/$bgname";
rename($bg_top_img, $name);
$result=mysql_query("UPDATE header SET bg_top_img='$bg_top_img' ");
clearstatcache();

header('Location: land_header.php');

?>