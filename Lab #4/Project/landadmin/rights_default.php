<?
include('db_connect.php');

$rights="All rights reserved Copyright &Acirc;&copy; 2014 FLATPACK by ";
$company="PixFort";

$result8=mysql_query("UPDATE rights SET rights='$rights', company='$company' ");

header('location: rights.php');
?>