<?
include('db_connect.php');
$discript_1=htmlentities($_POST['discript_1']);
$result=mysql_query("UPDATE serv SET discript_1='$discript_1' ");
header('Location: services.php');

?>