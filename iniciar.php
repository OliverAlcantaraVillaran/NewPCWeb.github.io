<?php
		session_start();
		if(ISSET($_SESSION['username'])){
		header("location: home.php");
		}
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
        <a class="nav-link" href="registrarse.php">Registrarse</a>
		<a class="nav-link" href="informatica.html">PC</a>
		<a class="nav-link" href="consolas.html">Consolas</a>
		<a class="nav-link" href="phones.html">Telefonos y Tablets</a>
		<a class="nav-link" href="otros.html">Servicios</a>
		<a class="nav-link" href="contacto.html">Contacto</a>
      </nav>
    </div>
  </header>
<img width="100%" height="auto" src="http://newpcweb.es/dat/banner.jpg" >
  <main class="px-3">
  
    
			<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="">NewPcWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Acceso a Usuarios</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		
		<br style="clear:both;" /><br /><br />
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="alert alert-info">Ingresar</div>
			
			<form method="POST" action="login.php">
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" name="username" class="form-control"/>
				</div>
				<div class="form-group">
					<label>Contrase&ntilde;a</label>
					<input type="password" name="password" class="form-control"/>
				</div>
				<br />
				<button class="btn btn-primary form-control" name="login"><span class="glyphicon glyphicon-log-in"></span> Ingresar</button>
			</form>
		</div>
	</div>
	
	  
	<p class="lead">
      <!––por si quiero añadir mas cosas––>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <img width="100%" height="auto" src="http://newpcweb.es/dat/banner2.jpg" >
  </footer>
</div>


    <script scr="js/bootstrap.min.js"></scripts>
  </body
</html>