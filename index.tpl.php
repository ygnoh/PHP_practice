<?php if (isset($_SESSION["mem_email"])) { ?>
	<h1>login-ed</h1>
<?php } else { ?>
	<form action="./sign_in.php" method="POST" id="login-form">
		<table>
			<tr>
				<div class="radio">
					<th></th>
					<th><label><input type="radio" name="user-type" value="customer" checked> 고객</label></th>
					<th><label><input type="radio" name="user-type" value="company"> 직원</label></th>
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
				<td><a href="#">회원가입</a></td>
				<td><a href="#" id="sign-in" onclick="document.getElementById('login-form').submit()">로그인</a></td>
			</tr>
		</table>
	</form>
<?php } ?>
<?php
	include "index.js"
?>
