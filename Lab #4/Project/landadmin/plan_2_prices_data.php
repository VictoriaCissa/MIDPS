<?
include('db_connect.php');
$plan_prices=htmlentities($_POST['plan_prices']);
$result=mysql_query("UPDATE prices SET price_name_2='$plan_prices' ");
header('Location: prices.php');

?>