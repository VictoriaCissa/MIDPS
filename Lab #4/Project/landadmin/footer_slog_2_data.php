<?
include('db_connect.php');
$slog_2=htmlentities($_POST['slog_2']);
$result=mysql_query("UPDATE footer SET slog_2='$slog_2' ");
header('Location: footer.php');

?>