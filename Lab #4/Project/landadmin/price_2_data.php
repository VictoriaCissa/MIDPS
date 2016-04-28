<?
include('db_connect.php');
$price_2=htmlentities($_POST['price_2']);
$result=mysql_query("UPDATE prices SET price_2='$price_2' ");
header('Location: prices.php');

?>