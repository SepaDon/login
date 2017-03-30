<?php

	class autorization {
		function checkt($login, $password,$chek) {
			require '../Model/select.php';
			$parametr = new select;
			$log = $parametr->name();
			foreach (($log['1']) as $value) {
				if ($value == $login) {
					foreach (($log['2']) as $pss) {
						if ($pss == $password) {
							
							if ($chek == "true") {
								setcookie("name", $login, time() + 3600, '/');
							} 
							else {
								setcookie("name", $login, time() - 3600, '/');
							}
	
							echo "
								<script language='JavaScript' type='text/JavaScript'>
									function Go(){
										location='../View/user.php';
									}
									setTimeout ('Go()', 2000);
								</script>
							";
							goto a;				
						}						
					}							
				}
			}
			echo "Данный пользователь не найден. Повторите снова. <a href='../View/login.php'>Исправить</a>";			
			a:
		}
	}
?>