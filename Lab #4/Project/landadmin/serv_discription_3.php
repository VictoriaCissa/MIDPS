<?
include('db_connect.php');
$discript_3=htmlentities($_POST['discript_3']);
$result=mysql_query("UPDATE serv SET discript_3='$discript_3' ");
header('Location: services.php');

?>