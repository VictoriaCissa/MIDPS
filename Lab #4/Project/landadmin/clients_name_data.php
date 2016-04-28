<?
include('db_connect.php');
$name=htmlentities($_POST['name']);
$result=mysql_query("UPDATE clients SET name='$name' ");
header('Location: clients.php');

?>