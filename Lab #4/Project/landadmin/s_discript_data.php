<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?
// include('db_connect.php');
// $s_discript=htmlentities($_POST['s_discript']);
// $result=mysql_query("UPDATE header SET s_discript='$s_discript' ");
// header('Location: land_header.php');



$fp = fopen("s_discript.txt", "w+"); // Открываем файл в режиме записи
$mytext = $s_discript=htmlentities($_POST['s_discript']); // Исходная строка
$test = fwrite($fp, $mytext); // Запись в файл
if ($test);
else echo 'Ошибка при записи в файл.';
fclose($fp); //Закрытие файла

?>


<script type="text/javascript">
setTimeout('window.location="land_header.php"',1);
</script>


</body>
</html>




