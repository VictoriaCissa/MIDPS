<?
include('db_connect.php');
$name_2=htmlentities($_POST['name_2']);
$result=mysql_query("UPDATE footer SET name_2='$name_2' ");
header('Location: footer.php');

?>