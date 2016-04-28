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


$name="The most amazing thing is here";
$discript="Our service is astonishingly thin and light.";
$slog="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam quis nostrud.";
$img="images/promo-image.png";

$result2=mysql_query("UPDATE preview SET name='$name', discript='$discript', slog='$slog',img='$img' ");

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

$name="Companies We Work With";
$slog="great words from great people";
$logo_1="images/logos1.png";
$logo2="images/logos2.png";
$logo_3="images/logos3.png";
$logo_4="images/logos4.png";

$result5=mysql_query("UPDATE clients SET name='$name', slog='$slog', logo_1='$logo_1', logo2='$logo2', logo_3='$logo_3', logo_4='$logo_4'   ");


$name="What our awesome clients say ";
$comment="Great service with fast and reliable support The design work and detail put into themes are great. ";
$url="via Unbounce.com";

$result6=mysql_query("UPDATE review SET name='$name', comment='$comment', url='$url'  ");


$name_1="See our office";
$slog_1="Our service is totaly thin and light";
$map_url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174147.5981092008!2d28.858176549999985!3d46.99986904999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3628b769a1%3A0x37d1d6305749dd3c!2z0JrQuNGI0LjQvdGR0LIsINCc0L7Qu9C00L7QstCw!5e0!3m2!1sru!2s!4v1437136810648";
$name_2="Contact us now";
$slog_2="Our service is totaly thin and light";
$form_email=" ";

$result7=mysql_query("UPDATE footer SET name_1='$name_1', name_2='$name_2', slog_1='$slog_1', slog_2='$slog_2', map_url='$map_url', form_email='$form_email'   ");

$rights="All rights reserved Copyright &Acirc;&copy; 2014 FLATPACK by ";
$company="PixFort";

$result8=mysql_query("UPDATE rights SET rights='$rights', company='$company' ");

header('location: land_header.php');



?>