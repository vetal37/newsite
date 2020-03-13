<?php
	session_start();
	include "../model/model.php";
	if (isset($_SESSION['username'])){
		header('location:cArticle.php');
	}
	$content= "../view/vSignup.php";
	$mess="Регистрация на сайте";
	if (isset($_POST['newusername']) and isset($_POST['newpass'])){
		$username=$_POST['newusername'];
		$pass=$_POST['newpass'];
		signup($username,$pass);
	}
	include "../template/tMain.php";
?>