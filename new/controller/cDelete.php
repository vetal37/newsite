<?php
session_start();
include "../model/model.php";
if (!isset($_SESSION['username'])){
	header('location:cLogin.php');}
if(isset($_POST['delete'])){
	del($_POST["fileToDel"]);
	header("location:cArticle.php");
}
$content="../view/vDelete.php";
$mess="Удаление статьи";
include "../template/tMain.php";
if(isset($_POST['delete'])){
}
?>