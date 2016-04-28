<?
include('db_connect.php');
$fact_3=htmlentities($_POST['fact_3']);
$resul3=mysql_query("UPDATE numbers SET fact_3='$fact_3' ");
header('Location: numbers.php');

?>