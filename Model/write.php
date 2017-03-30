<?php
	class write {
		function writ ($login, $password){
			$mysqli = mysqli_connect ("localhost", "root", "725110", "rega");
			$set = $mysqli->query ("INSERT INTO `user` (`login`, `password`) VALUES ('$login', '$password') ");
			$mysqli->close ();
		}
	}
?>