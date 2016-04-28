<?
include('db_connect.php');
$slog=htmlentities($_POST['slog']);
$result=mysql_query("UPDATE numbers SET slog='$slog' ");
header('Location: numbers.php');

?>