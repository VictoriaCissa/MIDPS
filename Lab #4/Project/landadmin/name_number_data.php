<?
include('db_connect.php');
$name=htmlentities($_POST['name']);
$result=mysql_query("UPDATE numbers SET name='$name' ");
header('Location: numbers.php');

?>