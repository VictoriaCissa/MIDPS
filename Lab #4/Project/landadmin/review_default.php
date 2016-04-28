<?
include('db_connect.php');


$name="What our awesome clients say ";
$comment="Great service with fast and reliable support The design work and detail put into themes are great. ";
$url="via Unbounce.com";

$result6=mysql_query("UPDATE review SET name='$name', comment='$comment', url='$url'  ");

header('location: review.php');
?>