<?
include('db_connect.php');
$map_url=htmlentities($_POST['map_url']);
$result=mysql_query("UPDATE footer SET map_url='$map_url' ");
header('Location: footer.php');

?>