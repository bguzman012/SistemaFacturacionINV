<!DOCTYPE html>
<html lang="en">
<head>
<title>Productos</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/Productos.css" type="text/css" media="all" />
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
$categoria=trim($_GET["cat"]);
$id= trim($_GET["id"]);
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

<!--===============================================================================================================================-->
<div class="top-products">
	<div class="container">
		<h3>Todos Nuestros Productos</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>TIENDA MICHELITA</span></li>			
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
                    <?php

					
                    include_once("capalogica/clasemanejo.php");
                    $objma= new clasemanejo();
                    if($categoria<15)
                    {
	                    $objma->categoriap=$categoria;
	                    $datos = $objma->listarproductocat();
	                    foreach($datos as $row =>$item)
	                    {
	                    ?>
							<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
								<a href="Unidad.php?producto=<?php echo $item["idproducto"];?>&cat=<?php echo $categoria; ?>"><div class="product-img">
									<img src="<?php echo $item["foto"]; ?>" alt="" />
									<div class="p-mask">
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4><?php echo $item["nombreproducto"]; ?></h4>
								<h5>$<?php echo $item["precio"]; ?></h5>
							</div>
					<?php
	                    }
	                }
	                else
	                {
	                    $datos = $objma->listarproducto();
	                    foreach($datos as $row =>$item)
	                    {
	                    ?>
							<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
								<a href="Unidad.php?producto=<?php echo $item["idproducto"];?>&cat=<?php echo $categoria; ?>"><div class="product-img">
									<img src="<?php echo $item["foto"]; ?>" alt="" />
									<div class="p-mask">
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4><?php echo $item["nombreproducto"]; ?></h4>
								<h5>$<?php echo $item["precio"]; ?></h5>
							</div>
					<?php
						}
					}
					?>
						<div class="clearfix"></div>
						</div>
					</div>	
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>



<!--======================================================================================================================================-->

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
?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.php?id=<?php echo $id;?>"><img src="images/Logos/pc.png" alt=" " /><h1>TIENDA MICHELITA<span></span></h1></a>
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
						<li><a href="index.php?id=<?php echo $id;?>" class="hyper "><span>Inicio</span></a></li>	
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Nosotros<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Quienes.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>¿Quiénes Somos?</a></li>
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

<!--===============================================================================================================================-->
<div class="top-products">
	<div class="container">
		<h3>Todos Nuestros Productos</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>TIENDA MICHELITA</span></li>			
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
                    <?php
                    include_once("capalogica/clasemanejo.php");
                    $objma= new clasemanejo();
                    if($categoria<15)
                    {
	                    $objma->categoriap=$categoria;
	                    $datos = $objma->listarproductocat();
	                    foreach($datos as $row =>$item)
	                    {
	                    ?>
							<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
								<a href="Unidad.php?id=<?php echo $id; ?>&producto=<?php echo $item["idproducto"];?>&cat=<?php echo $categoria; ?>"><div class="product-img">
									<img src="<?php echo $item["foto"]; ?>" alt="" />
									<div class="p-mask">
									<form action="#" method="post">
										<a href="GuardarCarritos.php?cliente=<?php echo $id; ?>&producto=<?php echo $item["idproducto"]; ?>&categoria=<?php echo $categoria; ?>" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>AGREGAR</a>
									</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4><?php echo $item["nombreproducto"]; ?></h4>
								<h5>$<?php echo $item["precio"]; ?></h5>
							</div>
					<?php
	                    }
	                }
	                else
	                {
	                    $datos = $objma->listarproducto();
	                    foreach($datos as $row =>$item)
	                    {
	                ?>
							<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
								<a href="Unidad.php?id=<?php echo $id; ?>&producto=<?php echo $item["idproducto"];?>&cat=<?php echo $categoria; ?>"><div class="product-img">
									<img src="<?php echo $item["foto"]; ?>" alt="" />
									<div class="p-mask">
									<form action="#" method="post">
										<a href="GuardarCarritos.php?cliente=<?php echo $id; ?>&producto=<?php echo $item["idproducto"]; ?>&categoria=<?php echo $categoria; ?>" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>AGREGAR</a>
									</form>
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4><?php echo $item["nombreproducto"]; ?></h4>
								<h5>$<?php echo $item["precio"]; ?></h5>
							</div>
					<?php 
						}
					}
					?>	                
						<div class="clearfix"></div>
						</div>
					</div>	
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>



<!--======================================================================================================================================-->

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
			<ul>>
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