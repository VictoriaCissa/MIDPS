<?
include('db_connect.php');
$number_3=htmlentities($_POST['number_3']);
$result=mysql_query("UPDATE numbers SET number_3='$number_3' ");
header('Location: numbers.php');

?>