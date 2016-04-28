<?
include('db_connect.php');


$name="Companies We Work With";
$slog="great words from great people";
$logo_1="images/logos1.png";
$logo2="images/logos2.png";
$logo_3="images/logos3.png";
$logo_4="images/logos4.png";

$result5=mysql_query("UPDATE clients SET name='$name', slog='$slog', logo_1='$logo_1', logo2='$logo2', logo_3='$logo_3', logo_4='$logo_4'   ");

header('location: clients.php');
?>