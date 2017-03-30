<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Авторизация</h1>

	<form action="../Controller/go.php" method="post">

	<label>Ваш логин<br></label>
	<input type="text" name="login" size="20" maxlength="20" required><br>

	<label>Ваш пароль<br></label>
	<input type="password" name="password" size="30" maxlength="30" required><br>

	<input type="checkbox" name="check" value="true">	<label>Запомнить меня<br></label>

	<input type="submit" name="submit" value="Авторизироваться">
	</form>

	
		

</body>
</html>