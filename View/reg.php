<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="chek.js"></script>
</head>
<body>
	<h1>Регистрация</h1>

	<form action="../Controller/test.php" method="post">

	<label>Ваш логин<br></label>
	<input type="text" id="login" name="login" size="20" maxlength="20" onclick="chek()" required>
	<div id="zanyat"></div><br>

	<label>Ваш пароль<br></label>
	<input type="password" name="password" size="30" maxlength="30" required><br>

	<label> Повторите ваш пароль</label><br>
	<input type="password" name="repead_password" size="30" maxlength="30" required><br>
	
	<input type="submit" name="submit" value="Зарегестрироваься">
	</form>
	
	


</body>
</html>