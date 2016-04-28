<?
include('db_connect.php');
$price_1=htmlentities($_POST['price_1']);
$result=mysql_query("UPDATE prices SET price_1='$price_1' ");
header('Location: prices.php');

?>