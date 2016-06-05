<form action="./process.php?mode=sign_up" method="POST" id="login-form">
	<table>
		<tr>
			<div class="radio">
				<th></th>
				<th><label><input type="radio" name="user-type" value="member" checked> 고객</label></th>
				<th><label><input type="radio" name="user-type" value="manager"> 직원</label></th>
			</div>
		</tr>
		<tr>
			<td>운전면허번호</td>
			<td colspan='2'><input type="text" name="license" class="form-control" placeholder="license number" /></td>
		</tr>
		<tr>
			<td>이메일</td>
			<td colspan='2'><input type="email" name="email" class="form-control" placeholder="email" /></td>
		</tr>
		<tr>
			<td>비밀번호</td>
			<td colspan='2'><input type="password" name="password" class="form-control" placeholder="password" /></td>
		</tr>
		<tr>
			<td>비밀번호확인</td>
			<td colspan='2'><input type="password" name="confirm" class="form-control" placeholder="confirmation" /></td>
		</tr>
		<tr>
			<td>이름</td>
			<td colspan='2'><input type="text" name="name" class="form-control" placeholder="name" /></td>
		</tr>
		<tr>
			<td>전화번호</td>
			<td colspan='2'><input type="text" name="phone" class="form-control" placeholder="phone number" /></td>
		</tr>
		<tr>
			<td>주소</td>
			<td colspan='2'><textarea name="address" class="form-control" placeholder="address"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><a href="/">뒤로</a></td>
			<td><a href="#" onclick="document.getElementById('login-form').submit()">가입하기</a></td>
		</tr>
	</table>
</form>
