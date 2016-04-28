<?
include('db_connect.php');
$number_2=htmlentities($_POST['number_2']);
$result=mysql_query("UPDATE numbers SET number_2='$number_2' ");
header('Location: numbers.php');

?>