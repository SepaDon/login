<?php

	class test {
		function chek($password, $repead_password, $login) {
			if ($password != $repead_password) {
				echo "Введите пароль. <a href='../View/reg.php'>Исправить</a>";
			} else {
				require '../Model/select.php';
				$rez = new select();
				$log = $rez->name();
				foreach ($log['1'] as $value) {
					if ($value == $login) {
						echo "Данное имя пользователя занято. <a href='../View/reg.php'>Исправить</a>";
						goto a;
					}
				}
			require '../Model/write.php';
			$ter = new write();
			$ter->writ($login, $password);
			echo "Вы зарегистрированы. $login";
		a:
			}	
		}
	}
?>