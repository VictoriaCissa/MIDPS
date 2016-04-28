<?php
include('db_connect.php');
mysql_query("INSERT INTO `comments` (`name`,`text`) values ('".$_POST['name']."','".$_POST['text']."')") or die(mysql_error());
$result = mysql_query("SELECT * from `comments`  ORDER BY id DESC LIMIT 3") or die(mysql_error());
$return_arr = array();
while ($row = mysql_fetch_array($result)){
	$row_array['text'] = $row['text'];
	$row_array['name'] = $row['name'];
	array_push($return_arr,$row_array);
}
echo json_encode($return_arr);
//echo '{"name":"jjj","text":"bbb"}';
?>