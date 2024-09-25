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
	
			<TABLE >
			<TR>
			<TD COLSPAN=3><h1> <BLOCKQUOTE><b>&iquest;Qu&eacute; es el HARDWARE y el SOFTWARE?</b></BLOCKQUOTE> </h1></TD>
	
			</TR>
			<TD COLSPAN=3><dir><LI> Hardware.- Corresponde a todas las partes tangibles o f&iacute;sicas de un sistema inform&aacute;tico.</dir></TD>
			</TR>
			<TD COLSPAN=3><dir><LI> Software.- Se conoce como software al equipamiento l&oacute;gico o soporte l&oacute;gico necesario que hacen posible la realizaci&oacute;n de tareas en una computadora digital.</dir></TD>
			</TR>
			</TABLE>


			<h1><IMG width="100%" height="auto" SRC="dat/hard.JPG"></h1>


			<center>
			<b>No dude en preguntar por tel&eacute;fono m&oacute;vil o por email en la zona Contacto si su sistema falla, tambi&eacute;n atendemos por whatsapp.</b>
			</center>
			<TABLE ALIGN="center">
			<CAPTION> <h1>T&eacute;cnico Sistemas Microinform&aacute;ticos y Redes </h1></CAPTION>
			<TR>
			<TD>
			<DIR><br><b>Hardware:</b></DIR>
			<dir>-Diagn&oacute;stico de errores.</dir>
			<dir>-Reparaci&oacute;n del hardware.</dir>
			<dir>-Instalaci&oacute;n o cambios de componentes.</dir>
			<dir>-Cableado de redes estructurado.</dir> </TD>
			<TD><br><DIR><b>Software:</b></DIR>
			<dir>-Instalaci&oacute;n y reparaci&oacute;n de sistemas operativos (Windows, Linux, etc..)</dir>
			<dir>-Redes, Subredes.</dir>
			<dir>-Aplicaciones de Gesti&oacute;n y Ofim&aacute;ticas.</dir></TD>
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