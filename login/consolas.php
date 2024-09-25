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
	
			<CENTER><U><B>Consolas</B></U></CENTER><p>

			<TABLE >
			<TR>
			<TD COLSPAN=3><dir>En NewPC nos dedicamos a la reparaci&oacute;n e instalaci&oacute;n de nuevos componentes,  enfocadas al cliente, de todo lo relacionado con el mundo de los juegos y las nuevas tecnolog&iacute;as...</dir></TD>
		</TR>
			<TD COLSPAN=3><dir>-Todas las Playstations.</dir></TD>
			</TR>
		<TD COLSPAN=3><dir>-Todas las Xboxs.</dir></TD>
			</TR>
			<TD COLSPAN=3><dir>-Todas las Nintendo + Wii.</dir></TD>
		</TR>
		<TD COLSPAN=3><dir>-Psp y Psp Vita.</dir></TD>
		</TR>
			<TD COLSPAN=3><dir><center>&iquest;No funciona tu consola? no te procupes... !En NewPC te lo solucionamos&iexcl;</center></dir></TD>
		</TR>
		<TD COLSPAN=3><dir>&gt;Reparaci&oacute;n o cambio de componente hardware.</dir></TD>
		</TR>
		<TD COLSPAN=3><dir>&gt;Reparaci&oacute;n o reinstalaci&oacute;n de software.</dir></TD>
		</TR>
		<TD COLSPAN=3><dir>&gt;Modificaci&oacute;n de software.(Flash): Playstation 1, 2 y 3, Xbox 360, Todas las Nintendo + Wii, Psp y Psp Vita.</dir></TD>
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