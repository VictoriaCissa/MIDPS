<?
include('db_connect.php');
$fact_4=htmlentities($_POST['fact_4']);
$resul3=mysql_query("UPDATE numbers SET fact_4='$fact_4' ");
header('Location: numbers.php');

?>