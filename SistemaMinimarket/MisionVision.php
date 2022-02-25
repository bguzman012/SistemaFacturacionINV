<!DOCTYPE html>
<html lang="en">
<head>
<title>Misión / Visión</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/Mision.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>


<body>
<?php
error_reporting(0);
require "controladores/categorias.controlador.php";
require "modelos/categorias.modelo.php";
if($validacion== null || $validacion ='')
{
?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.php"><img src="images/Logos/pc.png" alt=" " /><h1>TIENDA MICHELITA<span></span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+593 980414756</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Menú</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="index.php" class="hyper "><span>Inicio</span></a></li>	
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Nosotros<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Quienes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>¿Quiénes Somos?</a></li>
												<li><a href="MisionVision.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Mision/Visiòn/Servicios </a></li>
												
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Terminos.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Términos y Condiciones</a></li>
												<li><a href="Preguntas.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Preguntas Frecuentes</a></li>
											</ul>
										</div>
										<div class="col-sm-4 w3l">
											<a href="#"><img src="images/Productos/menu2.jpeg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Productos<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
								<div class="row">
									<?php

										$item = null;
										$valor = null;
										
										$conteo_final = ControladorCategorias::getCount($item, $valor);


										$limit=0;
										$num_coolumnas = $conteo_final["numero_datos"] / 8;

										$num_coolumnas =  ceil($num_coolumnas);

										if($num_coolumnas>4){
											$num_coolumnas = 4;
										}

										$i = 1;

										$value_final = 0;
										
										while ($i <= $num_coolumnas) {
											
											$cont  = 0;
											//echo "<script>console.log('res: " . $num_coolumnas . "' );</script>";
											echo '<div class="col-sm-4">
												<ul class="multi-column-dropdown">';

											$clientes = ControladorCategorias::ctrMostrarCategoriasLimitSeis($item, $valor, $limit);
	
											foreach ($clientes as $key => $value) {


												$value_final = $value["id"];

												echo '<li><a href="Productos.php?cat='.$value["id"].'"><i class="fa fa-angle-right" aria-hidden="true"></i>'.$value["categoria"].'</a></li>';
												$cont ++;
												
											}

											 $limit = $value_final;
																				
										
											$i++;  
											echo '</ul>';
											
											echo'</div>';		
									}
										?>
									
										<div class="col-sm-4 w3l">
											<a href="#"><img src="images/Productos/acesorios.jfif" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
					
						<li><a href="Contacto.php" class="hyper"><span>Contacto</span></a></li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Mi Cuenta<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Login.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Iniciar Sesión</a></li>
												
											</ul>
										</div>
										<div class="col-sm-4">
											<a href="#"><img src="images/Productos/Logo/pc.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Buscar" required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
	</div>
</div>


<div class="sub-banner">
</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Misión</h3>
		<div class="container" align="justify">
			<p><b>TIENDA MICHELITA</b> busca satisfacer las necesidades de compra que tenemos todos, a través de bienes de excelencia, originalidad y calidad. Nuestro modelo de negocio se basa en procesos de comercio electrónico, seguros y eficientes. Contamos con un equipo de trabajo altamente capacitado, con la mejor aptitud de servicio, sentido de la responsabilidad y ética, que busca dar un buen servicio y de calidad en el mejor tiempo posible. La innovación constante nos permite llegar al cliente con eficiencia en nuestros productos tecnológicos.</p></div>
		</div>
	</div>

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

		<div class="top-brands">
		<div class="container">
			<h3>Visión</h3>
		<div class="container" align="justify">
			<p>Queremos que <b>TIENDA MICHELITA</b> en el 2025 sea una de las empresas líder en el mercado online. Vamos a desarrollar un canal fuerte de ventas por medio de nuestra Tienda Virtual, con los mejores productos, en la que encontrarás nuestro apoyo y la solución, de una manera fácil, cómoda y segura, buscando constantemente nuevas alternativas, basados en el conocimiento profundo de las necesidades de nuestra distinguida clientela.</p>
		</div>
		</div>
	</div>

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

<div class="top-brands">
		<div class="container">
			<div class="fandt">
	<div class="container">
			<h3>Nuestros Servicios</h3>
			<div class="support">
					<i class="fa fa-user " aria-hidden="true"></i>
				<div class="col-md-10 ftext">
					<p><b>SOPORTE TÉCNICO:</b> en línea las 24 horas, los 7 días de la semana</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
					<i class="fa fa-bus" aria-hidden="true"></i>
				<div class="col-md-10 ftext">
					<p><b>ENVÍOS GRATUITOS:</b> aplica únicamente a los productos comprados dentro de la provincia.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
					<i class="fa fa-money" aria-hidden="true"></i>
				<div class="col-md-10 ftext">
					<p><b>COMPRA SEGURA:</b> si hay imperfectos de fábrica se devolvera el dinero y tarjeta de regalo.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
			<script src="js/jquery.wmuSlider.js"></script> 
			<script>
				$('.example1').wmuSlider();         
			</script> 
		</div>
	</div>

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->


<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.php"><img src="images/Logos/compu.png" alt=" " /><h3>TIENDA MICHELITA</h3></a>
		<ul>
			<li>Victorino Abarca s/n y Domingo Comin</li>
            <li>Sucúa / Morona Santiago  / Ecuador</li>
            <li><a href="#">david_avila85@hotmail.com</a></li>

			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Menú</h4> 
			<ul>
				<li><a href="index.php">Inicio</a></li>
				
				<li><a href="Contacto.php">Contacto</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Nosotros</h4> 
			<ul>
				<li><a href="MisionVision.php">Misión</a></li>
				<li><a href="MisionVision.php">Visión</a></li>
				<li><a href="Quienes.php">¿Quiénes Somos?</a></li>
				
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				<li><a href="Login.php">Iniciar Sesión</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2021 TIENDA MICHELITA. Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
	</div>
</div>
<?php
}
?>
</body>
</html>