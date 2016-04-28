<?
include('db_connect.php');
$price_discript_1_2=htmlentities($_POST['price_discript_1_2']);
$result=mysql_query("UPDATE prices SET price_discript_1_2='$price_discript_1_2' ");
header('Location: prices.php');

?>