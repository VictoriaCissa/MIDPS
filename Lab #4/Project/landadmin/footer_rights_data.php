<?
include('db_connect.php');
$rights=htmlentities($_POST['rights']);
$result=mysql_query("UPDATE rights SET rights='$rights' ");
header('Location: rights.php');

?>