<?
include('db_connect.php');
$name=htmlentities($_POST['name']);
$result=mysql_query("UPDATE prices SET name='$name' ");
header('Location: prices.php');

?>