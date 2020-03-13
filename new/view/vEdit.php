<form class='newfile' method='post' action='cEdit.php'>
<?php
$dir = "../data/articles/";
if (is_dir($dir)){
	if(isset($_GET['file'])){
		$file=$_GET['file'];
		$oldfile=$_GET['file'];
		file_put_contents('../data/temp/tmp.txt',$file);
		$contents=file_get_contents($dir.$file);
		echo "<label for='name'>Название статьи</label><br><input type='text' name='file' value=";
		echo $file;
		echo "><br><label for='name'>Текст</label><br> 
		<textarea cols='50' rows='10' name='text'>";
		echo $contents;
		echo "</textarea><br><br>";
		echo "<input type='submit' class ='button' value='Изменить'>";
	}else{ 
		if (is_dir($dir)){ 
			if ($dh = opendir($dir)){				
				while (($file = readdir($dh)) !== false){
					if($file!="." and $file!=".."){
						$linkid=urlencode($file);
						echo "<a href=cEdit.php?file=$linkid>$file</a></br>";
					}	
				} 
				closedir($dh); 
			}
		}
	}
}
?>
</form>