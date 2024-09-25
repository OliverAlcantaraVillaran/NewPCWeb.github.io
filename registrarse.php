<?php
			require 'oav/oav.php';
		?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Favicons -->



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
 <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">T&eacute;cnico Sistemas Microinform&aacute;ticos y Redes</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        <a class="nav-link" href="login/index.php">Iniciar Sesion</a>
        <a class="nav-link" href="registrarse.php">Registrarse</a>
		<a class="nav-link" href="informatica.html">PC</a>
		<a class="nav-link" href="consolas.html">Consolas</a>
		<a class="nav-link" href="phones.html">Telefonos y Tablets</a>
		<a class="nav-link" href="otros.html">Servicios</a>
		<a class="nav-link" href="contacto.html">Contacto</a>
      </nav>
    </div>
  </header>
<img width="100%" height="auto" src="dat/banner.jpg" >
  <main class="px-3">
  
    
	
    <p class="">
	
			<center><h3>Registro de Usuarios</h3></center>
		<form action="duplicado.php" class="" id="usuarios" name="usuarios" method="POST">
			<div class="form-group flex-colum flex-sm-row">
				<input type="text" name="username" placeholder="Usuario">
				<input type="text" name="name" placeholder="Nombre">
				<input type="text" name="correo" placeholder="Correo"><p>
				<input class="form-group mr-sm-2" type="password" name="password" placeholder="Password">
				<input class="form-group mr-sm-2" type="password" name="rpassword" placeholder="RepetirPassword">
				
				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn-sm" name="registrarse" value="Registrate">
		</form>
		<div class="tabla">
			<table>
				<tr>
					<!-- añadir mas cosas-->
				</tr>
						
				  <footer class="mt-auto text-white-50">
    <img width="100%" height="auto" src="dat/banner2.jpg" >
  </footer>
				</table>
					</div>
				</div>
	
	<script src="js/formulario.js"></script>
	</p>   
	


</div>


    <script scr="js/bootstrap.min.js"></scripts>
  </body
</html>
