<?
include('db_connect.php');
$url_2=htmlentities($_POST['url_2']);
$result=mysql_query("UPDATE header SET url_2='$url_2' ");

header('Location: land_header.php');

?>