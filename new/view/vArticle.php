<form class='newfile' method='post' action='cArticle.php'>
<?php 
	$dir = "../data/articles/"; 
	if (is_dir($dir)){ 
		if ($dh = opendir($dir)){				
			while (($file = readdir($dh)) !== false){
				if($file!="." and $file!=".."){
					$linkid=urlencode($file);
					echo "<a href=cRead.php?file=$linkid>$file</a><br>";
				}	
			} 
			closedir($dh); 
		} 
	}
?> 
<form>