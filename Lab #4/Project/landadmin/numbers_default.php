<?
include('db_connect.php');


$name="Great people trusted our services";
$slog="great words from great people";
$number_1="+950";
$number_2="+150";
$number_3="+85";
$number_4="6K";
$fact_1="Themes and Templates Sales";
$fact_2="Followers love and trust u";
$fact_3="Items selling on themeforest";
$fact_4="Working hours this year wow";

$result3=mysql_query(" UPDATE numbers SET name='$name', slog='$slog', number_1='$number_1', number_2='$number_2' ,number_3='$number_3', number_4='$number_4'    ");
header('location: numbers.php');
?>