<?php
function read($file){
	$text= file_get_contents('../data/articles/'.$file);
	$text=nl2br($text);
	return $text;
}
function create($file,$text){
	file_put_contents('../data/articles/'.$file,$text);
}
function del($file){
	unlink('../data/articles/'.$file);
}
function logincheck($username,$pass){
	$usrdata=file_get_contents('../data/loginfo/userlist.txt');
	$data=preg_split('<br />',$usrdata);
	for($i=0;$i<count($data);$i++){
		$logpass=explode(' ',$data[$i],2);
		$logpass[0]=trim($logpass[0],'<');
		$logpass[0]=trim($logpass[0],'>');
		$logpass[1]=trim($logpass[1],'<');
		$logpass[1]=trim($logpass[1],'>');
		$logpass[0]=trim($logpass[0]);
		$logpass[1]=trim($logpass[1]);
		if ($logpass[0]==$username and $logpass[1]==$pass){
			$_SESSION['username']=$username;
			$_SESSION['password']=$pass;
			header('Location:cArticle.php');
		}
	}
}
function signup($username,$pass){
	$usrdata=file_get_contents('../data/loginfo/userlist.txt');
	file_put_contents('../data/loginfo/test.txt',$usrdata);
	$data=preg_split('<br />',$usrdata);
	for($i=0;$i<count($data);$i++){
		$logpass=explode(' ',$data[$i],2);
		$logpass[0]=trim($logpass[0],'<');
		$logpass[0]=trim($logpass[0],'>');
		$logpass[1]=trim($logpass[1],'<');
		$logpass[1]=trim($logpass[1],'>');
		$logpass[0]=trim($logpass[0]);
		$logpass[1]=trim($logpass[1]);
		if ($logpass[0]==$username){
			echo '<dialog open>ѕользователь с таким именем уже зарегистрирован</dialog>';
			return 0;
		}	
	}
	$usrdata=$usrdata.'<br />'.$username.' '.$pass;
	file_put_contents('../data/loginfo/userlist.txt',$usrdata);
	logincheck($username,$pass);
}
?>