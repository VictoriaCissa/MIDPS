<?
include('db_connect.php');
$plan_slog_3=htmlentities($_POST['plan_slog_3']);
$result=mysql_query("UPDATE prices SET plan_slog_3='$plan_slog_3' ");
header('Location: prices.php');

?>