<?
include('db_connect.php');
$name_1=htmlentities($_POST['name_1']);
$result=mysql_query("UPDATE serv SET name_1='$name_1' ");
header('Location: services.php');

?>