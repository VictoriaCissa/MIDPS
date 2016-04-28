<?
include('db_connect.php');
$slog=htmlentities($_POST['slog']);
$result=mysql_query("UPDATE preview SET slog='$slog' ");
header('Location: preview.php');

?>