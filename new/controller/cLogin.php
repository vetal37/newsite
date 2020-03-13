<?php
	session_start();
	include "../model/model.php";
	if (isset($_SESSION['username'])){
		header('location:cArticle.php');
	}
	$content= "../view/vLogin.php";
	$mess="¬ход на сайт";
	if (isset($_POST['username']) and isset($_POST['pass'])){
		$username=$_POST['username'];
		$pass=$_POST['pass'];
		logincheck($username,$pass);
	}
	include "../template/tMain.php";
?>