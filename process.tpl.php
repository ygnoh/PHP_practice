<?php
	switch ($_GET['mode']) {
		case 'sign_in':
			if ($_POST['user-type'] == 'member')
				$result = mysql_query("select count(*) from member where mem_email = '".$_POST['email']."' and mem_password = '".$_POST['password']."'");
			else
				$result = mysql_query("select count(*) from manager where mng_email = '".$_POST['email']."' and mng_password = '".$_POST['password']."'");

			if (mysql_result($result, 0) > 0) // if signed in successfully
				$_SESSION["email"] = $_POST["email"];
			header('Location: /');
			exit;
			break;
		case 'sign_out':
			session_destroy();
			header('Location: /');
			exit;
			break;
		case 'sign_up':
			if ($_POST['user-type'] == 'member') {
				mysql_query("insert into member values ('".$_POST['license']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['email']."','".$_POST['password']."')");
			} else {
			}
			$_SESSION["mem_email"] = $_POST["email"];
			header('Location: /');
			exit;
			break;
	}
?>
