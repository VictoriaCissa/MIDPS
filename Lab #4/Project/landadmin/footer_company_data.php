<?
include('db_connect.php');
$company=htmlentities($_POST['company']);
$result=mysql_query("UPDATE rights SET company='$company' ");
header('Location: rights.php');

?>