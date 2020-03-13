<?php
session_start();
include "../model/model.php";
if(isset($_GET['file'])){
	$file=$_GET['file'];
	$text=read($file);
	$content="../view/vRead.php";
	$mess="Чтение";
	include "../template/tMain.php";
}else{
	header("location:cArticle.php");}
exit();
?>