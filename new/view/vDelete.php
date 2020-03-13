<form class='newfile' method='post' action='cDelete.php'>
<?php
$dir = "../data/articles/";
if (is_dir($dir)){
	if(isset($_GET['file'])){
		$file=$_GET['file'];
		$contents=file_get_contents($dir.$_GET['file']);
		$contents=nl2br($contents);
			echo "<strong>$file</strong><br>";
			echo $contents;
			echo "<form class='newfile' method='post'>
				<input type='text' value='".$file."' name='fileToDel' style='display:none;'>
				<input type='submit' class='button' name='delete' value='Удалить' />
		</form>";
		;
		}else{ 
			if (is_dir($dir)){ 
			if ($dh = opendir($dir)){				
				while (($file = readdir($dh)) !== false){
					if($file!="." and $file!=".."){
						$linkid=urlencode($file);
						echo "<a href=cDelete.php?file=$linkid>$file</a></br>";
					}	
				} 
				closedir($dh); 
			}
		}
	}
}
?>
</form>