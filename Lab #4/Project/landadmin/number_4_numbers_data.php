<?
include('db_connect.php');
$number_4=htmlentities($_POST['number_4']);
$result=mysql_query("UPDATE numbers SET number_4='$number_4' ");
header('Location: numbers.php');

?>