<?
include('db_connect.php');
$note=htmlentities($_POST['note']);
$result=mysql_query("UPDATE header SET note='$note' ");
header('Location: land_header.php');

?>