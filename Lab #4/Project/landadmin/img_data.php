<?
include('db_connect.php');

$imgname=$_FILES["img"] ["name"];
$type=$_FILES ["img"] ["type"];
$temp=$_FILES["img"] ["tmp_name"];
$error=$_FILES["img"] ["error"];


	move_uploaded_file($temp, "images/".$imgname);


$img="images/$imgname";

$result=mysql_query("UPDATE preview SET img='$img' ");


header('Location: preview.php');



?>