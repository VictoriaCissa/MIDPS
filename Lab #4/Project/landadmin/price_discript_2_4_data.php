<?
include('db_connect.php');
$price_discript_2_4=htmlentities($_POST['price_discript_2_4']);
$result=mysql_query("UPDATE prices SET price_discript_2_4='$price_discript_2_4' ");
header('Location: prices.php');

?>