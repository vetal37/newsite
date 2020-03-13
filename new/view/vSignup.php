<div class="container mregister">
	<div id="login">
	<h1>Регистрация</h1>
		<form name="registerform" id="registerform" action="cSignup.php" method="post">			
			<p>
				<label for="user_pass">Логин<br />
				<input type="text" name="newusername" id="username" class="input" value="" size="20" /></label>
			</p>
			
			<p>
				<label for="user_pass">Пароль<br />
				<input type="password" name="newpass" id="password" class="input" value="" size="32" /></label>
			</p>
			<p class="submit">
				<input type="submit" name="register" id="register" class="button" value="Зарегистрироваться" />
			</p>
			
			<p style='line-height:20px;' class="regtext">Уже есть аккаунт? <br><a href="cLogin.php" >Войдите</a>!</p>
		</form>
	</div>
</div>