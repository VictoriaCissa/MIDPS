<?
include('db_connect.php');
$fact_1=htmlentities($_POST['fact_1']);
$result=mysql_query("UPDATE numbers SET fact_1='$fact_1' ");
header('Location: numbers.php');

?>