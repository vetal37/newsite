<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header" style='display: center'>
		<?php
			if (!isset($_SESSION['username'])){
					echo "<br><div>Вы вошли в систему как гость<br>";
				}else{
					echo "<br><div>Здравствуйте, ";
					echo ($_SESSION['username']);
					echo "</div><br>";
				}
		?>
			<h1>Новости</h1>
			<div>
				<?php
				if (!isset($_SESSION['username'])){
					echo "<br><entbutton> <a href='cLogin.php' style='display: center; color: Black'> Войти </a> </entbutton><br><br>";
				}else{
					echo "<br><entbutton> <a href='cLogout.php' style='display: center; color: Black'>Выйти </a> </entbutton><br><br>";
				}
				?>
			</div>
		</div>
		<div class="menu">
		<ul style='display: center'>
			<li> <a href="cArticle.php"> Главная </a>  </li>
			<?php
			if (isset($_SESSION['username'])){
				echo '<li> <a href="cNew.php"> Добавить </a> </li>';
				echo '<li> <a href="cEdit.php"> Редактировать </a> </li>';
				echo '<li> <a href="cDelete.php"> Удалить </a> </li>';
			}
			?>
		</ul>
		</div>
	</div>
	<div class="panel" style='height:38px'>
	<?php
		echo $mess;
	?>
	</div>
	<div class="panel">
		<ul class="content111">
		<?php 
			include $content
		?>
		</ul>
	</div>

