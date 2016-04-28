<?
include('db_connect.php');
$slog=htmlentities($_POST['slog']);
$result=mysql_query("UPDATE prices SET slog='$slog' ");
header('Location: prices.php');

?>