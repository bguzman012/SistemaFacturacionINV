<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistema Web de Facturacion Promocion y Control</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/Jortech2.css" type="text/css" media="all" />
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
$validacion=$_SESSION['nombres'];
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
						<li class="active"><a href="index.php" class="hyper "><span>Inicio</span></a></li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Nosotros<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
													<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Quienes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>¿Quiénes Somos?</a></li>
												<li><a href="MisionVision.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Misiòn/Visiòn/Servicios</a></li>
												
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Pagos.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Tipos de Pagos</a></li>
												<li><a href="Terminos.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Términos y Condiciones</a></li>
												<li><a href="Preguntas.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Preguntas Frecuentes</a></li>
											</ul>
										</div>
										<div class="col-sm-4 w3l">
											<a href="#"><img src="images/Productos/celus.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Productos<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="Productos.php?cat=7"><i class="fa fa-angle-right" aria-hidden="true"></i>Computadoras</a></li>
												<li><a href="Productos.php?cat=9"><i class="fa fa-angle-right" aria-hidden="true"></i>Laptop`s</a></li>
												<li><a href="Productos.php?cat=10"> <i class="fa fa-angle-right" aria-hidden="true"></i>Celulares</a></li>
												<li><a href="Productos.php?cat=11"><i class="fa fa-angle-right" aria-hidden="true"></i>Impresoras</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Productos.php?cat=12"><i class="fa fa-angle-right" aria-hidden="true"></i>Accesorios</a></li>
												<li><a href="Productos.php?cat=13"><i class="fa fa-angle-right" aria-hidden="true"></i>Zona Gamer</a></li>
												<li><a href="Productos.php?cat=14"><i class="fa fa-angle-right" aria-hidden="true"></i>Otros</a></li>
												<li><a href="Productos.php?cat=15"><i class="fa fa-angle-right" aria-hidden="true"></i>Todos los productos</a></li>
											</ul>					
										</div>
										<div class="col-sm-4 w3l">
											<a href="#"><img src="images/Productos/acesorios.jfif" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li><a href="Marcas.php" class="hyper"><span>Marcas</span></a></li>
						<li><a href="Contacto.php" class="hyper"><span>Contacto</span></a></li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Mi Cuenta<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Login.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Iniciar Sesión</a></li>
												<li><a href="Registrarse.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Registrarse</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<a href="#"><img src="images/Productos/loguin.jfif" class="img-responsive" alt=""></a>
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
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner-agile">
	<div class="container">
		<h2>BIENVENIDOS</h2>
		<h3>TIENDA<span>MICHELITA</span></h3>
		<h3>PRODUCTOS DE PRIMERA NECECIDAD </h3>
		<a href="Productos.php?cat=7">COMPRAR</a>
	</div>
</div>

<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="Productos.php?cat=10"><div class="bb-left-agileits-w3layouts-inner">
					<h3>Oferta</h3>
					<h4>Descuento del<span>10%</span></h4>
					<h4>en Licores</h4>
			</div></a>
		</div>
		<div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
			<a href="Productos.php?cat=13"><div class="bb-middle-top">
				<h3>Oferta</h3>
				<h4>Descuento del<span>15%</span></h4>
				<h4>en Zona Gamer</h4>
			</div></a>
			<a href="Productos.php?cat=9"><div class="bb-middle-bottom">
				<h3>Oferta</h3>
				<h4>Descuento del<span>30%</span></h4>
				<h4>en Laptop`s</h4>
			</div></a>
		</div>
		<div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
			<a href="Productos.php?cat=12"><div class="bb-right-top">
				<h3>Oferta</h3>
				<h4>Descuento del<span>12%</span></h4>
				<h4>en Accesorios</h4>
			</div></a>
			<a href="Productos.php?cat=14"><div class="bb-right-bottom">
				<h3>Oferta</h3>
				<h4>Descuento del<span>20%</span></h4>
				<h4>en Otros</h4>
			</div></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Nuestros Servicios</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Soporte gratuito</h4>
					<p>Soporte gratuito en línea las 24 horas, los 7 días de la semana</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Envíos Gratuitos</h4>
					<p>Aplica únicamente a los productos comprados dentro de la provincia.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% de devolución de dinero</h4>
					<p>Compra segura, si hay imperfectos de fábrica se devolvera el dinero y tarjeta de regalo.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
							<img src="https://scontent.fuio5-1.fna.fbcdn.net/v/t31.18172-8/12890988_1119162974782270_3736026909062289196_o.jpg?_nc_cat=100&ccb=1-5&_nc_sid=174925&_nc_eui2=AeG2smKtoBMCL7oCF9TUD_Sk_IomVhHlUWr8iiZWEeVRakAKPf2fsSLjEGpg5QXgd1HUcOHKZ_ZdDslk6539_TGD&_nc_ohc=gdV4a54Qxb4AX85Y4eE&_nc_ht=scontent.fuio5-1.fna&oh=dc3e1ae84509eb5ea87118bf3e5bc259&oe=6172E7F1" alt=" " class="img-responsive" />
							<br>
								
								
								
								<br>
								

								<p>Trabajar con nocotros es tu mejor elección  TIENDA MICHELITA
									<br> Nosotros programamos tu futuro .</p>
								<h4>VISITANOS SERA UN PLACER ATENDERTE </h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
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
		<a href="index.php"><img src="images/Logos/pc.png" alt=" " /><h3>TIENDA MICHELITA</h3></a>
		<ul>
			<li>Rocendo TOrres y Domingo Comin</li>
			<li>Sucúa / Morona Santiago  / Ecuador</li>
			<li><a href="#">micheliata_jaya@outlook.es</a></li>
			<a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com/smart.zone.779"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
		<p class="copy-right">© 2022 TIENDA MICHELITA. Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
	</div>
</div>
<?php
}
else
{
    if(isset($_POST["btnsalir"]))
    {
        session_destroy();
        header("location: index.php");
    }
    $id= trim($_GET["id"]);
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
						<li class=" active"><a href="index.php?id=<?php echo $id;?>" class="hyper "><span>Inicio</span></a></li>	
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Nosotros<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Quienes.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>¿Quiénes Somos?</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Mision/Visiòn/Servicios</a></li>
												
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Pagos.php?id=<?php echo $id;?>"> <i class="fa fa-angle-right" aria-hidden="true"></i>Tipos de Pagos</a></li>
												<li><a href="Terminos.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Términos y Condiciones</a></li>
												<li><a href="Preguntas.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Preguntas Frecuentes</a></li>
											</ul>
										</div>
										<div class="col-sm-4 w3l">
											<a href="#"><img src="images/Productos/celus.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Productos<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=7"><i class="fa fa-angle-right" aria-hidden="true"></i>Computadoras</a></li>
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=9"><i class="fa fa-angle-right" aria-hidden="true"></i>Laptop`s</a></li>
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=10"> <i class="fa fa-angle-right" aria-hidden="true"></i>Celulares</a></li>
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=11"><i class="fa fa-angle-right" aria-hidden="true"></i>Impresoras</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=12"><i class="fa fa-angle-right" aria-hidden="true"></i>Accesorios</a></li>
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=13"><i class="fa fa-angle-right" aria-hidden="true"></i>Zona Gamer</a></li>
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=14"><i class="fa fa-angle-right" aria-hidden="true"></i>Otros</a></li>
												<li><a href="Productos.php?id=<?php echo $id;?>&cat=15"><i class="fa fa-angle-right" aria-hidden="true"></i>Todos los productos</a></li>
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="#"><img src="images/Productos/Menu.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li><a href="Marcas.php?id=<?php echo $id;?>" class="hyper"><span>Marcas</span></a></li>

						<li><a href="Contacto.php?id=<?php echo $id;?>" class="hyper"><span>Contacto</span></a></li>
						<li class="dropdown">
							<li class="nav-menu-item"><form method="post" action=""><button type="submit" name="btnsalir" class="btn btn-outline-danger"><font style="color: red">Cerrar sesion</font></button></form></li>
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
		<div class="col-md-1 cart-wthree">
			<button class="w3view-cart"><a class="fa fa-cart-arrow-down" href="Carrito.php?id=<?php echo $id;?>"></a></button>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner-agile">
	<div class="container">
		<h2>BIENVENIDOS</h2>
		<h3>SMART<span>ZONE</span></h3>
		<p>La mejor tecnología con los mejores precios</p>
		<a href="Productos.php?id=<?php echo $id;?>&cat=7">COMPRAR</a>
	</div>
</div>

<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="Productos.php?id=<?php echo $id;?>&cat=10"><div class="bb-left-agileits-w3layouts-inner">
					<h3>Oferta</h3>
					<h4>Descuento del<span>20%</span></h4>
					<h4>en Celulares</h4>
			</div></a>
		</div>
		<div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
			<a href="Productos.php?cat=13"><div class="bb-middle-top">
				<h3>Oferta</h3>
				<h4>Descuento del<span>10%</span></h4>
				<h4>en Zona Gamer</h4>
			</div></a>
			<a href="Productos.php?id=<?php echo $id;?>&cat=9"><div class="bb-middle-bottom">
				<h3>Oferta</h3>
				<h4>Descuento del<span>5%</span></h4>
				<h4>en Laptop`s</h4>
			</div></a>
		</div>
		<div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
			<a href="Productos.php?id=<?php echo $id;?>&cat=12"><div class="bb-right-top">
				<h3>Oferta</h3>
				<h4>Descuento del<span>15%</span></h4>
				<h4>en Accesorios</h4>
			</div></a>
			<a href="Productos.php?id=<?php echo $id;?>&cat=14"><div class="bb-right-bottom">
				<h3>Oferta</h3>
				<h4>Descuento del<span>25%</span></h4>
				<h4>en Otros</h4>
			</div></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Nuestros Servicios</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Soporte gratuito</h4>
					<p>Soporte gratuito en línea las 24 horas, los 7 días de la semana</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Envíos Gratuitos</h4>
					<p>Aplica únicamente a los productos comprados dentro de la provincia.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% de devolución de dinero</h4>
					<p>Compra segura, si hay imperfectos de fábrica se devolvera el dinero y tarjeta de regalo.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="https://media.istockphoto.com/vectors/closeup-portrait-of-an-ordinary-caucasian-man-vector-id1262973430?k=20&m=1262973430&s=612x612&w=0&h=VdlBdO82UtiNjNthRvNOU1GFvHUkPTXSerNoQJt78H4=" alt=" " class="img-responsive" />
								<p>Dueño y Fundador de la marca TIENDA MICHELITA, con ideas innovadoras y mejores precios en sus productos.</p>
								<h4># David Avila</h4>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
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
		<a href="index.php"><img src="images/Logos/pc.png" alt=" " /><h3>TIENDDA MICHELITA </h3></a>
		<ul>
		<li>Rocendo Torres y Domingo Comin</li>
            <li>Sucúa / Morona Santiago  / Ecuador</li>
            <li><a href="#">micheliata_jaya@outlook.es</a></li>

			<a href="https://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Menú</h4> 
			<ul>
				<li><a href="index.php?id=<?php echo $id;?>">Inicio</a></li>
				<li><a href="Marcas.php?id=<?php echo $id;?>">Marcas</a></li>
				<li><a href="Contacto.php?id=<?php echo $id;?>">Contacto</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Nosotros</h4> 
			<ul>
				<li><a href="MisionVision.php?id=<?php echo $id;?>">Misión</a></li>
				<li><a href="MisionVision.php?id=<?php echo $id;?>">Visión</a></li>
				<li><a href="Quienes.php?id=<?php echo $id;?>">¿Quiénes Somos?</a></li>
				<li><a href="Pagos.php?id=<?php echo $id;?>"></a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				<li><a href="Carrito.php?id=<?php echo $id;?>">Carrito </a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2022 TIENDA MICHELITA . Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
	</div>
</div>
<?php
}
?>	
</body>
</html>