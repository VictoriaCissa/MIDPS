<?
include('db_connect.php');
$slog=htmlentities($_POST['slog']);
$result=mysql_query("UPDATE clients SET slog='$slog' ");
header('Location: clients.php');

?>