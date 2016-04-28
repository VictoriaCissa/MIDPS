<?
include('db_connect.php');
$name=htmlentities($_POST['name']);
$result=mysql_query("UPDATE preview SET name='$name' ");
header('Location: preview.php');

?>