<?
include('db_connect.php');
$name=htmlentities($_POST['name']);
$result=mysql_query("UPDATE review SET name='$name' ");
header('Location: review.php');

?>