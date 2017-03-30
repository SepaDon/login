<?php
	class select {
		function name()
	{
			$mysqli = mysqli_connect ("localhost", "root", "725110", "rega");
			$log = $mysqli->query ("SELECT `login`, `password` FROM `user`");
			$name = [];
			$password = [];
			while (($row = $log->fetch_assoc()) ) {			
				$name[] = $row['login'];
				$password[] = $row['password'];
			}

			$ArrayForReturn = [];
			$ArrayForReturn['1'] = $name;
			$ArrayForReturn['2'] = $password;
			return ($ArrayForReturn);
			$mysqli->close ();
		}
	}
?>