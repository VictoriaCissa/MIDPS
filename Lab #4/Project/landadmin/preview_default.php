<?
include('db_connect.php');


$name="The most amazing thing is here";
$discript="Our service is astonishingly thin and light.";
$slog="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud.";
$img="images/promo-image.png";

$result2=mysql_query("UPDATE preview SET name='$name', discript='$discript', slog='$slog',img='$img' ");

header('location: preview.php');
?>