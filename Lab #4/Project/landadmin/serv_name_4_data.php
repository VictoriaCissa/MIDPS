<?
include('db_connect.php');
$name_4=htmlentities($_POST['name_4']);
$result=mysql_query("UPDATE serv SET name_4='$name_4' ");
header('Location: services.php');

?>