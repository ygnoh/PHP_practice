<?php if (isset($_SESSION["mem_email"])) { ?>
	<h3><?=$_SESSION["mem_email"]?></h3>
	<a href="./process.php?mode=sign_out">sign out</a>
<?php } else { ?>
	<form action="./process.php?mode=sign_in" method="POST" id="login-form">
		<table>
			<tr>
				<div class="radio">
					<th></th>
					<th><label><input type="radio" name="user-type" value="member" checked> 고객</label></th>
					<th><label><input type="radio" name="user-type" value="manager"> 직원</label></th>
				</div>
			</tr>
			<tr>
				<td>email</td>
				<td colspan='2'><input type="email" name="email" class="form-control" placeholder="email" /></td>
			</tr>
			<tr>
				<td>password</td>
				<td colspan='2'><input type="password" name="password" class="form-control" placeholder="password" /></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="/sign_up.php">회원가입</a></td>
				<td><a href="#" onclick="document.getElementById('login-form').submit()">로그인</a></td>
			</tr>
		</table>
	</form>
<?php } ?>
<?php
	include "index.js"
?>
