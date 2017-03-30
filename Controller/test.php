<?php	
		
	$login = $_POST["login"];
	$password = $_POST["password"];
	$repead_password = $_POST["repead_password"];

	require 'chek.php';
	$test = new test();
	$test -> chek($password, $repead_password, $login);
		
?>