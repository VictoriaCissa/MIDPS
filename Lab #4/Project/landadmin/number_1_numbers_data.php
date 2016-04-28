<?
include('db_connect.php');
$number_1=htmlentities($_POST['number_1']);
$result=mysql_query("UPDATE numbers SET number_1='$number_1' ");
header('Location: numbers.php');

?>