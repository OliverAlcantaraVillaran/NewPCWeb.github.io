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
	
			<h1><CENTER><U><B>Otros Servicios</B></U></CENTER><p>

		<CENTER><B>Android TV</B></CENTER><p></h1>
		<TABLE >
		<TR>
		<TD COLSPAN=3><dir>Instalaci&oacute;n y configuraci&oacute;n de software modificado en Android TV para ver todos los canales y pel&iacute;culas en la Televisi&oacute;n.(Wifi Necesario) </dir></TD>
		</TR>
		<TD COLSPAN=3><h1><CENTER><B>Seguridad</B></CENTER></h1><br></TD>
		</TR>
		<TD COLSPAN=3><dir>Instalaci&oacute;n y configuraci&oacute;n de c&aacute;maras de vigilancia:</p>
		Kits de c&aacute;maras de vigilancia con 2, 4, 8 o 16 c&aacute;maras de seguridad.</dir></TD>
		</TR>
		<TD COLSPAN=3><dir>Todos los kits de videovigilancia tienen conexi&oacute;n IP, pudi&eacute;ndose visualizar de forma remota desde un PC, m&oacute;vil o tablet. Solo se necesita tener conexi&oacute;n a Internet. </dir></TD>
		</TR>
		<TD COLSPAN=3><dir> Es la mejor inversi&oacute;n para tener vigilado 24 horas y todos los d&iacute;as del a&ntilde;o un negocio, vivienda, parcela o cualquier tipo de propiedad sin cuotas mensuales.</dir></TD>
		</TR>
		<TD COLSPAN=3><br><center><b>No dude en preguntar por tel&eacute;fono m&oacute;vil o por email en la zona Contacto, tambi&eacute;n atendemos por whatsapp.</b></center></TD>
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