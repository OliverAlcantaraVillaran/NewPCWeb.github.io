
<?php
	require_once 'oav/oav.php';

	if(isset($_POST['registrarse'])){
		$username=$_POST["username"];
		$name=$_POST["name"];
		$correo=$_POST["correo"];
		$password=$_POST["password"];
		$password= hash('sha512', $password);
		$rpassword=$_POST["password"];
		$user_id= rand(1,99);
		


//header("Location:http://newpcweb.es/index.html");



		
		$insertarDatos = "INSERT INTO datos VALUES('$user_id',
													'$username',
													'$name',
													'$correo',
													'$password')";
													
		$vereficar_usuario = mysqli_query($enlace, "SELECT * FROM datos WHERE username='$username'");
		if(mysqli_num_rows($vereficar_usuario) > 0){
			echo '
				<script>
				alert("Este Usuario ya esta Registrado");
				window.location = "registrarse.php"
				</script>
			';
			exit();
		}
		$vereficar_correo = mysqli_query($enlace, "SELECT * FROM datos WHERE correo='$correo'");
		if(mysqli_num_rows($vereficar_correo) > 0){
			echo '
				<script>
				alert("Este Correo ya esta Registrado");
				window.location = "registrarse.php"
				</script>
			';
			exit();
		}
		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
		
		if($ejecutarInsertar){
			echo '
				<script>
				alert("Usuario Almacenado");
				window.location = "/login/index.php";
				</script>
			';
			}else{
			echo'
			<script>
				alert("Usuario no Almacenado");
				window.location = "registrarse.php";
				</script>
			';
		
		}
		
			if(!$ejecutarInsertar){
			echo"Error En la linea de InsertarDatos";
		}
			
	}
	mysqli_close($enlace);
?>