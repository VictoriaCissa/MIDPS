<?
include('db_connect.php');
$price_discript_3_1=htmlentities($_POST['price_discript_3_1']);
$result=mysql_query("UPDATE prices SET price_discript_3_1='$price_discript_3_1' ");
header('Location: prices.php');

?>