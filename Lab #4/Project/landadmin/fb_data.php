<?
include('db_connect.php');
$url_1=htmlentities($_POST['url_1']);
$result=mysql_query("UPDATE header SET url_1='$url_1' ");
header('Location: land_header.php');

?>