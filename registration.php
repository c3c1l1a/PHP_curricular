<?php
	$err = array();
	if ($_POST['submit'] === 'Register'){
		if (strlen($_POST['username'])<4 or strlen($_POST['username']) > 30 ){
			$err[] = 'Your username should be between 4 an 30 characters';
		}

		if (empty($err)){
			$pass = substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1, 100000)), 0,	 50);

			$_POST['username'] = mysql_real_escape_string($_POST['username']);
			$_POST['email'] = mysql_real_escape_string($_POST['email']);
		}


	}	 
?>

