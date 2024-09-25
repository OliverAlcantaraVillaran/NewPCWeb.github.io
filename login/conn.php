<?php
	$conn = new mysqli('localhost', 'root', 'ketemato20', 'usuarios');
	
	if(!$conn){
		die("Error: No se puede conectar con la Base de Datos");
	}
?>