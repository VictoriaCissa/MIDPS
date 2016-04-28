<?
include('db_connect.php');
$fact_2=htmlentities($_POST['fact_2']);
$resul2=mysql_query("UPDATE numbers SET fact_2='$fact_2' ");
header('Location: numbers.php');

?>