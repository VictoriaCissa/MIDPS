<?
include('db_connect.php');
$price_discript_2_1=htmlentities($_POST['price_discript_2_1']);
$result=mysql_query("UPDATE prices SET price_discript_2_1='$price_discript_2_1' ");
header('Location: prices.php');

?>