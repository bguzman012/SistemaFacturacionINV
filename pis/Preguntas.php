<!DOCTYPE html>
<html lang="en">
<head>
<title>Preguntas Frecuentes</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/Preguntas.css" type="text/css" media="all" />
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
session_start();
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
				<li>+593  980414756</li>
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
											<a href="#"><img src="images/Productos/Menu.jpg" class="img-responsive" alt=""></a>
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
		<div class="clearfix"></div>
	</div>
</div>


<div class="sub-banner">
</div>

<!-- faq-banner -->
	<div class="faq">
		<h3>Preguntas Frecuentes</h3>
			<div class="container">
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puedo navegar por la web sin estar registrado?
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div align="justify" class="panel-body panel_text">
					Sí, podrás navegar por la web y ver los diferentes artículos que están disponibles en la Tienda Online de TIENDA MICHELITA. Si además de navegar por la web deseas ir añadiendo productos al carrito te solicitaremos que indiques tu código postal (para poder mostrarte los productos disponibles en tu zona), seleccionar una tienda de recogida o registrarte con tus datos.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Cómo puedo saber si la Tienda Online de TIENDA MICHELITA sirve a mi domicilio?
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				   <div align="justify" class="panel-body panel_text">
					Cuando entres en la Tienda Online, a la hora de introducir la dirección de entrega del pedido, te indicaremos si tu dirección está dentro de nuestra área de reparto.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Hay un importe mínimo/máximo para realizar un pedido?
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div align="justify" class="panel-body panel_text">
					No existe un importe mínimo ni máximo de compra. En caso de recibir un pedido con un importe excepcionalmente alto el Servicio de Atención al Cliente se pondrá en contacto contigo para verificar que el pedido realizado es correcto.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puede no haber disponibilidad de artículos en la compra online?
					</a>
				  </h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				   <div align="justify" class="panel-body panel_text">
					En TIENDA MICHELITA trabajamos para que siempre podamos servirte lo que nos hayas solicitado. En el caso de que al preparar tu pedido nos encontremos que no disponemos algún artículo de los que nos has solicitado nos pondremos en contacto contigo si en el momento de registrarte así nos lo indicaste. Si no quieres que nos pongamos en contacto contigo cuando no dispongamos de un artículo, te lo notificaremos y lamentándolo el pedido te llegará sin dicho artículo.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFive">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Cómo incluyo una dirección de envío?
					</a>
				  </h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
				   <div align="justify" class="panel-body panel_text">
					Antes de hacer el primer pedido en la tienda online tendrás que indicar en “Mi Cuenta” la dirección o direcciones a las cuales se te pueden enviar los pedidos. Lo primero que haremos cuando quieras empezar un pedido es preguntarte por la dirección de envío del pedido, que deberá ser una de las que ya has incluido en “Mi Cuenta”. También podrás seleccionar una tienda, de las que ofrecemos como opción, como lugar de recogida.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSix">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puedo cambiar la hora/fecha de entrega?
					</a>
				  </h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
				   <div align="justify" class="panel-body panel_text">
					Sí, para ello es necesario que te pongas en contacto con nuestro Servicio de Atención al Cliente.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSeven">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puedo pedir la factura electrónica?
					</a>
				  </h4>
				</div>
				<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
				   <div align="justify" class="panel-body panel_text">
					Sí, podrás pedir factura electrónica de tus pedidos en el momento de seleccionar la dirección y franja de entrega. También podrás solicitar la factura de un pedido anterior poniéndote en contacto con nuestro Servicio de Atención al Cliente. En ambos casos te la enviaremos por correo electrónico en un plazo de 48 horas.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingEight">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Qué es el precio estimado y precio total?
					</a>
				  </h4>
				</div>
				<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
				   <div align="justify" class="panel-body panel_text">
					En los productos frescos, al realizar el pedido, la tienda online toma como referencia el peso teórico introducido para calcular el importe del artículo. Cuando se prepara el pedido se pesa el artículo real y se obtiene su peso. El peso teórico del pedido y el peso real de la preparación del pedido pueden variar ligeramente, por lo que puede haber un pequeño cambio en el precio final del artículo. En el albarán que recibirás con el pedido tendrás detallado el precio final con el peso real del artículo. Aun y todo si tienes dudas sobre tu pedido, no dudes en contactar con el Servicio de Atención al Cliente.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingNine">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Qué ocurre si el pedido llega tarde?
					</a>
				  </h4>
				</div>
				<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
				   <div align="justify" class="panel-body panel_text">
					No es normal que ocurra, pero si el pedido va a retrasarse nuestro Servicio de Atención al Cliente se pondrá en contacto contigo por teléfono.
				  </div>
				</div>
			  </div>
			</div>
			</div>
	</div>
<!-- //faq-banner -->
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
				<li><a href="Marcas.php">Marcas</a></li>
				<li><a href="Contacto.php">Contacto</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Nosotros</h4> 
			<ul>
				<li><a href="MisionVision.php">Misión</a></li>
				<li><a href="MisionVision.php">Visión</a></li>
				<li><a href="Quienes.php">¿Quiénes Somos?</a></li>
				<li><a href="Pagos.php">Tipos de Pagos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				<li><a href="Login.php">Iniciar Sesión</a></li>
				<li><a href="Registrarse.php">Registrarse</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2021 TIENDA MICHELITA. Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
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
			<a href="index.php?id=<?php echo $id;?>"><img src="images/Logos/pc.png" alt=" " /><h1>TIENDA MICHELITA<span></span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+593  980414756</li>
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
						<li><a href="index.php?id=<?php echo $id;?>" class="hyper "><span>Inicio</span></a></li>	
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Nosotros<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Quienes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>¿Quiénes Somos?</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Misión</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Visión</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Servicios</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Pagos.php?id=<?php echo $id;?>"> <i class="fa fa-angle-right" aria-hidden="true"></i>Tipos de Pagos</a></li>
												<li><a href="Terminos.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Términos y Condiciones</a></li>
												<li><a href="Preguntas.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Preguntas Frecuentes</a></li>
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


<div class="sub-banner">
</div>

<!-- faq-banner -->
	<div class="faq">
		<h3>Preguntas Frecuentes</h3>
			<div class="container">
			<div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
				  <h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puedo navegar por la web sin estar registrado?
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div align="justify" class="panel-body panel_text">
					Sí, podrás navegar por la web y ver los diferentes artículos que están disponibles en la Tienda Online de  TIENDA MICHELITA. Si además de navegar por la web deseas ir añadiendo productos al carrito te solicitaremos que indiques tu código postal (para poder mostrarte los productos disponibles en tu zona), seleccionar una tienda de recogida o registrarte con tus datos.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Cómo puedo saber si la Tienda Online de TIENDA MICHELITA sirve a mi domicilio?
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				   <div align="justify" class="panel-body panel_text">
					Cuando entres en la Tienda Online, a la hora de introducir la dirección de entrega del pedido, te indicaremos si tu dirección está dentro de nuestra área de reparto.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Hay un importe mínimo/máximo para realizar un pedido?
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div align="justify" class="panel-body panel_text">
					No existe un importe mínimo ni máximo de compra. En caso de recibir un pedido con un importe excepcionalmente alto el Servicio de Atención al Cliente se pondrá en contacto contigo para verificar que el pedido realizado es correcto.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puede no haber disponibilidad de artículos en la compra online?
					</a>
				  </h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				   <div align="justify" class="panel-body panel_text">
					En TIENDA MICHELITA trabajamos para que siempre podamos servirte lo que nos hayas solicitado. En el caso de que al preparar tu pedido nos encontremos que no disponemos algún artículo de los que nos has solicitado nos pondremos en contacto contigo si en el momento de registrarte así nos lo indicaste. Si no quieres que nos pongamos en contacto contigo cuando no dispongamos de un artículo, te lo notificaremos y lamentándolo el pedido te llegará sin dicho artículo.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFive">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Cómo incluyo una dirección de envío?
					</a>
				  </h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
				   <div align="justify" class="panel-body panel_text">
					Antes de hacer el primer pedido en la tienda online tendrás que indicar en “Mi Cuenta” la dirección o direcciones a las cuales se te pueden enviar los pedidos. Lo primero que haremos cuando quieras empezar un pedido es preguntarte por la dirección de envío del pedido, que deberá ser una de las que ya has incluido en “Mi Cuenta”. También podrás seleccionar una tienda, de las que ofrecemos como opción, como lugar de recogida.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSix">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puedo cambiar la hora/fecha de entrega?
					</a>
				  </h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
				   <div align="justify" class="panel-body panel_text">
					Sí, para ello es necesario que te pongas en contacto con nuestro Servicio de Atención al Cliente.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSeven">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Puedo pedir la factura electrónica?
					</a>
				  </h4>
				</div>
				<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
				   <div align="justify" class="panel-body panel_text">
					Sí, podrás pedir factura electrónica de tus pedidos en el momento de seleccionar la dirección y franja de entrega. También podrás solicitar la factura de un pedido anterior poniéndote en contacto con nuestro Servicio de Atención al Cliente. En ambos casos te la enviaremos por correo electrónico en un plazo de 48 horas.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingEight">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Qué es el precio estimado y precio total?
					</a>
				  </h4>
				</div>
				<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
				   <div align="justify" class="panel-body panel_text">
					En los productos frescos, al realizar el pedido, la tienda online toma como referencia el peso teórico introducido para calcular el importe del artículo. Cuando se prepara el pedido se pesa el artículo real y se obtiene su peso. El peso teórico del pedido y el peso real de la preparación del pedido pueden variar ligeramente, por lo que puede haber un pequeño cambio en el precio final del artículo. En el albarán que recibirás con el pedido tendrás detallado el precio final con el peso real del artículo. Aun y todo si tienes dudas sobre tu pedido, no dudes en contactar con el Servicio de Atención al Cliente.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingNine">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>¿Qué ocurre si el pedido llega tarde?
					</a>
				  </h4>
				</div>
				<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
				   <div align="justify" class="panel-body panel_text">
					No es normal que ocurra, pero si el pedido va a retrasarse nuestro Servicio de Atención al Cliente se pondrá en contacto contigo por teléfono.
				  </div>
				</div>
			  </div>
			</div>
			</div>
	</div>
<!-- //faq-banner -->
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
				<li><a href="Pagos.php?id=<?php echo $id;?>">Tipos de Pagos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				<li><a href="Carrito.php?id=<?php echo $id;?>">Carrito </a></li>
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