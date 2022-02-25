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
$categoria=trim($_GET["cat"]);



$validacion = null;
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
									<?php
									include_once("controladores/categorias.controlador.php");
									
									include_once("modelos/categorias.modelo.php");

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
                  
	                    $objma->categoriap=$categoria;
	                    $datos = $objma->listarproductocat();
	                    foreach($datos as $row =>$item)
	                    {
	                    ?>
							<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
								<a href="Unidad.php?producto=<?php echo $item["id"];?>&cat=<?php echo $categoria; ?>"><div class="product-img">
									<img src="<?php echo $item["imagen"]; ?>" alt="" />
									<div class="p-mask">
									</div>
								</div></a>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star yellow-star" aria-hidden="true"></i>
								<i class="fa fa-star gray-star" aria-hidden="true"></i>
								<h4><?php echo $item["descripcion"]; ?></h4>
								<h5>$<?php echo $item["precio_compra"]; ?></h5>
							</div>
					<?php
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