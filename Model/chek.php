<?php	
	
	$mysqli = mysqli_connect ("localhost", "root", "725110", "rega");
	
	$log = $mysqli->query ("SELECT `login`FROM `user`");
	
	$name=[];

		while (($row = $log->fetch_assoc()) )   {
				
				$name[] = $row['login'];
				
				}	

	$user = $_POST["login"];

		foreach ($name as $value) {

			if ($value == $user) {
				echo "fail";
				goto a;
			}
			}
				echo "true";
	a:
	$mysqli->close ();

	

?>