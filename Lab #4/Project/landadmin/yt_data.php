<?
include('db_connect.php');
$url_3=htmlentities($_POST['url_3']);
$result=mysql_query("UPDATE header SET url_3='$url_3' ");

header('Location: land_header.php');

?>