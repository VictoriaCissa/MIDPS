<?
include('db_connect.php');
$logo="images/logo.png";
$url_1="#";
$url_2="#";
$url_3="#";
$big_discript="CORPORATE LANDING PAGE";
copy("backup/bg_top","images/bg_top");

$fp = fopen("s_discript.txt", "w+"); // Открываем файл в режиме записи
$mytext = $s_discript="More than 10 unique unbounce templates in one bundle isn't that awesome with a lot of features and great design brought to you by PixFort."; // Исходная строка
$test = fwrite($fp, $mytext); // Запись в файл
fclose($fp); //Закрытие файла

$note="*Note: Bundle ends in two weeks from now.";
$bg_top_img="images/bg_top";

$result=mysql_query("UPDATE header SET logo='$logo',url_1='$url_1',url_2='$url_2',url_3='$url_3',big_discript='$big_discript',note='$note',bg_top_img='$bg_top_img'  ");
header('location: land_header.php');
?>