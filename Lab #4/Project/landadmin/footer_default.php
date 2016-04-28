<?
include('db_connect.php');

$name_1="See our office";
$slog_1="Our service is totaly thin and light";
$map_url="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174147.5981092008!2d28.858176549999985!3d46.99986904999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c3628b769a1%3A0x37d1d6305749dd3c!2z0JrQuNGI0LjQvdGR0LIsINCc0L7Qu9C00L7QstCw!5e0!3m2!1sru!2s!4v1437136810648";
$name_2="Contact us now";
$slog_2="Our service is totaly thin and light";
$form_email=" ";

$result7=mysql_query("UPDATE footer SET name_1='$name_1', name_2='$name_2', slog_1='$slog_1', slog_2='$slog_2', map_url='$map_url', form_email='$form_email'   ");

header('location: footer.php');
?>