<?
include('db_connect.php');
$name_3=htmlentities($_POST['name_3']);
$result=mysql_query("UPDATE serv SET name_3='$name_3' ");
header('Location: services.php');

?>