<form action="./sign_in.php?mode=insert" method="POST">
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
			<td colspan='2'><input type="email" class="form-control" placeholder="email" /></td>
		</tr>
		<tr>
			<td>password</td>
			<td colspan='2'><input type="password" class="form-control" placeholder="password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="/">회원가입</a></td>
			<td><a href="/">로그인</a></td>
		</tr>
	</table>
</form>
