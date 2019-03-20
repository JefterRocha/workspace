<?php
	header('Content-type: application/json; charset=utf-8');

	$database = 'database.txt'; // <-- CAMINHO DO SEU BANCO
	$dbStatus = 'DBstatus.txt';// <-- CMINHO DO ARQUIVO QUE GUARDA O NUMERO DE LINHAS DO BANCO
	$currentLines = 0;
	$handle = fopen($database, 'r');
  
	while(!feof($handle)){
		$line = fgets($handle);
		$currentLines++;
	}
	fclose($handle);
  
	$handle = fopen($dbStatus, 'r');
	
	if (filesize($dbStatus) ) {
		$conteudo = fread($handle, filesize($dbStatus));
		fclose($handle);
		
		if($currentLines > intval($conteudo)) {
			echo '{"newData":true}';
			$write = fopen($dbStatus, 'w');
			fwrite($write, $currentLines);
		}
		else {
			echo '{"newData":false}';
		}
	}
  
?>
