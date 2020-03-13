<div class="container mlogin">
    <h1>Вход</h1>
		<form name="loginform" id="loginform" action="cLogin.php" method="POST">
			<p>
				<label for="user_login">Логин<br />
				<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
			</p>
			<p>
				<label for="user_pass">Пароль<br />
				<input type="password" name="pass" id="password" class="input" value="" size="20" /></label>
			</p>
				<p class="submit">
				<input type="submit" name="login" class="button" value="Войти" />
			</p>
			<p class="regtext">Еще нет аккаунта? <a href="cSignup.php" >Зарегистрируйся</a>!</p>
		</form>
</div>