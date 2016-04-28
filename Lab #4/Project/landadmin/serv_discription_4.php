<?
include('db_connect.php');
$discript_4=htmlentities($_POST['discript_4']);
$result=mysql_query("UPDATE serv SET discript_4='$discript_4' ");
header('Location: services.php');

?>