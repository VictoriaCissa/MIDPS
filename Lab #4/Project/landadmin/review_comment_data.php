<?
include('db_connect.php');
$comment=htmlentities($_POST['comment']);
$result=mysql_query("UPDATE review SET comment='$comment' ");
header('Location: review.php');

?>