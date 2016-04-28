<?
include('db_connect.php');
$discript=htmlentities($_POST['discript']);
$result=mysql_query("UPDATE prices SET discript='$discript' ");
header('Location: prices.php');

?>