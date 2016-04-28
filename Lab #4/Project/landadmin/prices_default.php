<?
include('db_connect.php');


$name="Our Services Prices and Plans";
$discript="Our service is totaly thin and light.";
$slog="Get All The Features";
$price_name_1="Free";
$price_discript_1_1="5 Projects";
$price_discript_1_2="1 GB Storage";
$price_discript_1_3="No Domain";
$price_discript_1_4="1 User";

$price_name_2="Personal";
$price_discript_2_1="25 Projects";
$price_discript_2_2="50 GB Storage";
$price_discript_2_3="With 1 Domain";
$price_discript_2_4="10 User";

$price_name_3="Company";
$price_discript_3_1="100 Projects";
$price_discript_3_2="250 GB Storage";
$price_discript_3_3="Unlimited Domains";
$price_discript_3_4="50 Users";

$price_1="0$";
$price_2="9,99$";
$price_3="70$";

$plan_slog_1="Get All The Features";
$plan_slog_2="Get All The Features";
$plan_slog_3="Get All The Features";

$result4=mysql_query("UPDATE prices SET name='$name', discript='$discript', slog='$slog', price_name_1='$price_name_1', price_name_2='$price_name_2', price_name_3='$price_name_3', price_discript_1_1='$price_discript_1_1', price_discript_1_2='$price_discript_1_2', price_discript_1_3='$price_discript_1_3', price_discript_1_4='$price_discript_1_4', price_discript_2_1='$price_discript_2_1', price_discript_2_2='$price_discript_2_2', price_discript_2_3='$price_discript_2_3',  price_discript_2_4='$price_discript_2_4',  price_discript_3_1='$price_discript_3_1', price_discript_3_2='$price_discript_3_2', price_discript_3_3='$price_discript_3_3', price_discript_3_4='$price_discript_3_4', price_1='$price_1', price_2='$price_2',price_3='$price_3', plan_slog_1='$plan_slog_1', plan_slog_2='$plan_slog_2',plan_slog_3='$plan_slog_3' ");

header('location: prices.php');
?>