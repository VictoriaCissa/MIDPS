<?
include('db_connect.php');
$big_discript=htmlentities($_POST['big_discript']);
$result=mysql_query("UPDATE header SET big_discript='$big_discript' ");
header('Location: land_header.php');

?>