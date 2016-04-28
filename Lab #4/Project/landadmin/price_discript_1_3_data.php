<?
include('db_connect.php');
$price_discript_1_3=htmlentities($_POST['price_discript_1_3']);
$result=mysql_query("UPDATE prices SET price_discript_1_3='$price_discript_1_3' ");
header('Location: prices.php');

?>