<?
include('db_connect.php');
$email=htmlentities($_POST['email']);
$result=mysql_query("UPDATE footer SET email='$email' ");
header('Location: footer.php');

?>