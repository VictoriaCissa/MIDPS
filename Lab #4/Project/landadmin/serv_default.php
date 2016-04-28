<?
include('db_connect.php');


$icon1="images/1.png";
$icon2="images/2.png";
$icon3="images/3.png";
$icon4="images/4.png";
$name_1="Calculator";
$name_2="Daily mails";
$name_3="Cofee cup";
$name_4="Connection";
$discript_1="The edges may be directed or undirected For example if the vertice represent people party";
$discript_2="The edges may be directed or undirected For example if the vertice represent people party";
$discript_3="The edges may be directed or undirected For example if the vertice represent people party";
$discript_4="The edges may be directed or undirected For example if the vertice represent people party";

$result1=mysql_query("UPDATE serv SET icon1='$icon1', icon2='$icon2', icon3='$icon3', icon4='$icon4', name_1='$name_1', name_2='$name_2', name_3='$name_3', name_4='$name_4', discript_1='$discript_1', discript_2='$discript_2', discript_3='$discript_3', discript_4='$discript_4'  ");
header('location: services.php');
?>