<?php
header ("Content-Type: text/html; charset=utf-8");
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.
?>
<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
</head>
<link rel="stylesheet" type="text/css" href="AdminStyle.css">
<body>
<div id="wrap">
	<div id="auth">
		<form action="check.php" method="POST">
			<p>Login</p>
			<input type="text" name="login">
			<p>Password</p>
			<input type="password" name="password">
			<div id="submit">
				<input type="submit" value="Войти">
			</div>
		</form>
	</div>
</div>
</body>
</html>