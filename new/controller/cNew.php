<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header('location:cLogin.php');
	}
	include "../model/model.php";
	$content="../view/vNew.php";
	$mess="Добавление новой статьи";
	if(isset($_POST['file'])){
		$file=$_POST['file'];
		$text=$_POST['text'];
		create($file,$text);
		header("location:cArticle.php");}
	else{
		include "../template/tMain.php";
	}
?>