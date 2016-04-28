<?
include('db_connect.php');
$name=htmlentities($_POST['name']);
$company=htmlentities($_POST['company']);
$email=htmlentities($_POST['email']);
$message=htmlentities($_POST['message']);

$result=mysql_query("INSERT INTO footer_form VALUES 
	('$name','$company','$email','$message') ");

$send=mysql_query("SELECT form_email FROM footer");
		while ($row=mysql_fetch_assoc($send)) { $row['form_email'];}
$mail=$send[0];


	$subject="New tiket";
	$tiket="New tiket".$company ." contact them on " .$email;
	mail($mail,$subject,$tiket);
header('location: footer.php');

?>