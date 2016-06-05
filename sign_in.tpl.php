<?php
	$result = mysql_query("select count(*) from member where mem_email = '".$_POST['email']."' and mem_password = '".$_POST['password']."'");

	if (mysql_result($result, 0) <= 0) {
		header('Location: /');
		exit;
	} else {
		$_SESSION["mem_email"] = $_POST["email"];
	}
?>
