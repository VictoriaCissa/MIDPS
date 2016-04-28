<?
include('db_connect.php');
$url=htmlentities($_POST['url']);
$result=mysql_query("UPDATE review SET url='$url' ");
header('Location: review.php');

?>