<?php 
session_start();
if (!isset($_SESSION['username'])){
	header('location:cLogin.php');
}
include "../model/model.php";
$content="../view/vEdit.php";
$mess="Редактирование статьи";
if(isset($_POST['file'])){
	$file=$_POST['file'];
	$text=$_POST['text'];
	$oldfile=file_get_contents('../data/temp/tmp.txt');
	unlink('../data/articles/'.$oldfile);
	create($file,$text);
	header("location:cArticle.php");}
else{
	include "../template/tMain.php";
}
?>