<!doctype html>
<?php
		session_start();
		if(!ISSET($_SESSION['username'])){
		echo'
		<script>
			alert("Por favor debes iniciar sesion");
			window.location = index.html";
			</script>
		';
		//header("location: index.html");
		session_destroy();
		die();
		}
?>	
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
        <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
        <a class="nav-link" href="home.php">Zona Usuarios</a>
		<a class="nav-link" href="informatica.php">PC</a>
		<a class="nav-link" href="consolas.php">Consolas</a>
		<a class="nav-link" href="phones.php">Telefonos y Tablets</a>
		<a class="nav-link" href="otros.php">Servicios</a>
		<a class="nav-link" href="contacto.php">Contacto</a>
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
		<h3 class="text-primary">Bienvenido</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<?php
			require 'oav/oav.php';
			$query = $enlace->query("SELECT * FROM `datos` WHERE `username` = '$_SESSION[username]'");
			$fetch = $query->fetch_array();
		?>
		<h2 class="text-success">Aqui esta el yoni con sus cosas privadas</h2>
		<br />
		<center><h1><?php echo $fetch['name']?></h1></center>
		<a href="logout.php">Cerrar Sesi�n</a>
	</div>
	<br>
	<a href="home2.php">Siguiente Pagina</a>


	  
	<p class="lead">
      <!��por si quiero a�adir mas cosas��>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <img width="100%" height="auto" src="http://newpcweb.es/dat/banner2.jpg" >
  </footer>
</div>


    <script scr="js/bootstrap.min.js"></scripts>
  </body
</html>