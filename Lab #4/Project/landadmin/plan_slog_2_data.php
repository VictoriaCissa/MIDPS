<?
include('db_connect.php');
$plan_slog_2=htmlentities($_POST['plan_slog_2']);
$result=mysql_query("UPDATE prices SET plan_slog_2='$plan_slog_2' ");
header('Location: prices.php');

?>