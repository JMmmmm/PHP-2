<html>
<head>
	<title><?=$title?></title>
	<meta content="text/html; charset=utf8" http-equiv="content-type">	
	<link rel="stylesheet" type="text/css" media="screen" href="v/style.css" /> 	
</head>
<body>
	<div id="header">
		<h1><?=$title?></h1>
	</div>
	<a href="index.php">Вернуться на главную страницу</a>
	<div id="content">
		<form method="post">
		<label>
			Введите ваш логин:
			<input type="text" name="user">
		</label><br>
		<label>
			Введите ваш почтовый адрес:
			<input type="email" name="email">
		</label><br>
		<label>
			Введите ваш телефон:
			<input type="tel" name="tel">
		</label><br>
		<label>
			Введите пароль:
			<input type="password" name="pass">
		</label><br>
		<label>
			Повторите ваш пароль:
			<input type="password" name="pass2">
		</label><br>
		
		<input type="submit" value="Зарегистрировать" />
	</form>
	</div>
	<div><?=$errorPass ?></div>
	<div id="footer">
		Все права защищены. Адрес. Телефон.
	</div>
</body>
</html>