<?php
		session_start();
		include 'oav/oav.php';
		
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password = hash('sha512', $password);
			
			$validar_login = mysqli_query($enlace, "SELECT * FROM datos WHERE username='$username' and password='$password'");

			if(mysqli_num_rows($validar_login) > 0){
			$_SESSION['usuario'] = $username;
			header("location: home.php");
			}else{
			echo '
				<script>
					alert("Usuario no existe, por favor verifique los datos introducidos"=;
					window.location = "index.php";
					</>script>
					';
					exit;

			}
?>		