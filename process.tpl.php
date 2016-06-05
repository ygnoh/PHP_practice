<?php
	switch ($_GET['mode']) {
		case 'sign_in':
			$result = mysql_query("select count(*) from member where mem_email = '".$_POST['email']."' and mem_password = '".$_POST['password']."'");

			if (mysql_result($result, 0) > 0) // if signed in successfully
				$_SESSION["mem_email"] = $_POST["email"];
			header('Location: /');
			exit;
			break;
		case 'sign_out':
			session_destroy();
			header('Location: /');
			exit;
			break;
	}
?>
