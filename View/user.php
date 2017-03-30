<?php
	
	session_start();

	if (!isset($_COOKIE['name'])) {
		$user = $_SESSION['login'];
		echo "Вы вошли как $user (session) ";
	}
	else {
		$user = $_COOKIE['name'];	
		echo "Вы вошли как $user (cookie) ";
	}
	 
	
	
?>

<form action="../View/exit.php" method="POST">
	<input type="submit" value="Выйти">
</form>