<?
include('db_connect.php');
$discript_2=htmlentities($_POST['discript_2']);
$result=mysql_query("UPDATE serv SET discript_2='$discript_2' ");
header('Location: services.php');

?>