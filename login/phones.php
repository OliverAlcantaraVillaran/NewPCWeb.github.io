<!doctype html>
<?php
		session_start();
		if(!ISSET($_SESSION['user_id'])){
			header('location:index.php');
		}else{
			if((time() - $_SESSION['time']) > 600){
				header('location: logout_page.php');
			}
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
<img width="100%" height="auto" src="dat/banner.jpg" >
  <main class="px-3">
  
    
	
    <p class="">
	
			<CENTER><U><B>Smartphone y Tablets</B></U></CENTER><p>


			<TABLE >
			<TR>
			<TD COLSPAN=3><dir>&iquest;Tienes problemas con alg&uacute;n componente? &iquest;Se ha roto la pantalla de tu m&oacute;vil o Tablet? &iquest;Tu m&oacute;vil no enciende? &iquest;Tu Tablet no se escucha? </dir></TD>
			</TR>
			<TD COLSPAN=3><dir>&gt;Diagn&oacute;stico de errores.</dir></TD>
			</TR>
			<TD COLSPAN=3><dir>&gt;Instalaci&oacute;n o cambio de componente hardware.</dir></TD>
			</TR>
			<TD COLSPAN=3><dir>&gt;Instalaci&oacute;n de software modificado.</dir></TD>
			</TR>
			<TD COLSPAN=3><dir>&gt;Buscamos tu accesorio espec&iacute;fico en cualquier lugar del mundo.</dir></TD>
			</TR>
			<TD COLSPAN=3><br><center><b>No lo dudes y consulta los precios de las aver&iacute;as o accesorios de los m&oacute;viles por correo o tel&eacute;fono m&oacute;vil en la zona Contacto, tambi&eacute;n atendemos por whatsapp. </b></center></TD>
			</TR>
			</TABLE>
	
	</p>   
	<p class="lead">
      <!––por si quiero añadir mas cosas––>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <img width="100%" height="auto" src="dat/banner2.jpg" >
  </footer>
</div>


    <script scr="js/bootstrap.min.js"></scripts>
  </body
</html>