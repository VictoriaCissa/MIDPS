<?
include('db_connect.php');
$plan_slog_1=htmlentities($_POST['plan_slog_1']);
$result=mysql_query("UPDATE prices SET plan_slog_1='$plan_slog_1' ");
header('Location: prices.php');

?>