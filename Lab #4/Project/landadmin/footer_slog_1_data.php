<?
include('db_connect.php');
$slog_1=htmlentities($_POST['slog_1']);
$result=mysql_query("UPDATE footer SET slog_1='$slog_1' ");
header('Location: footer.php');

?>