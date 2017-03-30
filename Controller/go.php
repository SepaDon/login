<?php
	
	session_start();

	$login = $_POST["login"];
	$password = $_POST["password"];
	
	if (isset($_POST["check"])) {
		$chek = "true";
	}
	else {
		$chek = "false";
	}

	$_SESSION['login'] = $login;

	require 'autorization.php';
	$auto = new autorization;
	$auto->checkt($login, $password, $chek);


?>