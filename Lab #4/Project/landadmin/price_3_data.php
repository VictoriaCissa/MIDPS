<?
include('db_connect.php');
$price_3=htmlentities($_POST['price_3']);
$result=mysql_query("UPDATE prices SET price_3='$price_3' ");
header('Location: prices.php');

?>