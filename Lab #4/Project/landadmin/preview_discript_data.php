<?
include('db_connect.php');
$discript=htmlentities($_POST['discript']);
$result=mysql_query("UPDATE preview SET discript='$discript' ");
header('Location: preview.php');

?>