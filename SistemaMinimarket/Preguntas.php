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
						<span class="sr-only">Men??</span>
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
												<li><a href="Quienes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>??Qui??nes Somos?</a></li>
												<li><a href="MisionVision.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Misi??n/Visi??n/Servicios</a></li>
											
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Terminos.php"><i class="fa fa-angle-right" aria-hidden="true"></i>T??rminos y Condiciones</a></li>
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
												<li><a href="Login.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Iniciar Sesi??n</a></li>
												
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
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Puedo navegar por la web sin estar registrado?
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				  <div align="justify" class="panel-body panel_text">
					S??, podr??s navegar por la web y ver los diferentes art??culos que est??n disponibles en la TIENDA MICHELITA..
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??C??mo puedo saber si la Tienda Online de TIENDA MICHELITA sirve a mi domicilio?
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				   <div align="justify" class="panel-body panel_text">
					Cuando entres en la Tienda Online, a la hora de introducir la direcci??n de entrega del pedido, te indicaremos si tu direcci??n est?? dentro de nuestra ??rea de reparto.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Hay un importe m??nimo/m??ximo para realizar un pedido?
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				   <div align="justify" class="panel-body panel_text">
					No existe un importe m??nimo ni m??ximo de compra. En caso de recibir un pedido con un importe excepcionalmente alto el Servicio de Atenci??n al Cliente se pondr?? en contacto contigo para verificar que el pedido realizado es correcto.
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFour">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Puede no haber disponibilidad de art??culos en la compra online?
					</a>
				  </h4>
				</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				   <div align="justify" class="panel-body panel_text">
					En TIENDA MICHELITA trabajamos para que siempre podamos servirte lo que nos hayas solicitado. En el caso de que al preparar tu pedido nos encontremos que no disponemos alg??n art??culo de los que nos has solicitado nos pondremos en contacto contigo si en el momento de registrarte as?? nos lo indicaste. Si no quieres que nos pongamos en contacto contigo cuando no dispongamos de un art??culo, te lo notificaremos y lament??ndolo el pedido te llegar?? sin dicho art??culo.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingFive">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??C??mo incluyo una direcci??n de env??o?
					</a>
				  </h4>
				</div>
				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
				   <div align="justify" class="panel-body panel_text">
					Antes de hacer el primer pedido en la tienda online tendr??s que indicar en ???Mi Cuenta??? la direcci??n o direcciones a las cuales se te pueden enviar los pedidos. Lo primero que haremos cuando quieras empezar un pedido es preguntarte por la direcci??n de env??o del pedido, que deber?? ser una de las que ya has incluido en ???Mi Cuenta???. Tambi??n podr??s seleccionar una tienda, de las que ofrecemos como opci??n, como lugar de recogida.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSix">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Puedo cambiar la hora/fecha de entrega?
					</a>
				  </h4>
				</div>
				<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
				   <div align="justify" class="panel-body panel_text">
					S??, para ello es necesario que te pongas en contacto con nuestro Servicio de Atenci??n al Cliente.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingSeven">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Puedo pedir la factura electr??nica?
					</a>
				  </h4>
				</div>
				<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
				   <div align="justify" class="panel-body panel_text">
					S??, podr??s pedir factura electr??nica de tus pedidos en el momento de seleccionar la direcci??n y franja de entrega. Tambi??n podr??s solicitar la factura de un pedido anterior poni??ndote en contacto con nuestro Servicio de Atenci??n al Cliente. En ambos casos te la enviaremos por correo electr??nico en un plazo de 48 horas.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingEight">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Qu?? es el precio estimado y precio total?
					</a>
				  </h4>
				</div>
				<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
				   <div align="justify" class="panel-body panel_text">
					En los productos frescos, al realizar el pedido, la tienda online toma como referencia el peso te??rico introducido para calcular el importe del art??culo. Cuando se prepara el pedido se pesa el art??culo real y se obtiene su peso. El peso te??rico del pedido y el peso real de la preparaci??n del pedido pueden variar ligeramente, por lo que puede haber un peque??o cambio en el precio final del art??culo. En el albar??n que recibir??s con el pedido tendr??s detallado el precio final con el peso real del art??culo. Aun y todo si tienes dudas sobre tu pedido, no dudes en contactar con el Servicio de Atenci??n al Cliente.
				  </div>
				</div>
			  </div>
			   <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingNine">
				  <h4 class="panel-title asd">
					<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>??Qu?? ocurre si el pedido llega tarde?
					</a>
				  </h4>
				</div>
				<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
				   <div align="justify" class="panel-body panel_text">
					No es normal que ocurra, pero si el pedido va a retrasarse nuestro Servicio de Atenci??n al Cliente se pondr?? en contacto contigo por tel??fono.
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
            <li>Suc??a / Morona Santiago  / Ecuador</li>
            <li><a href="#">david_avila85@hotmail.com</a></li>


			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Men??</h4> 
			<ul>
				<li><a href="index.php">Inicio</a></li>
			
				<li><a href="Contacto.php">Contacto</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Nosotros</h4> 
			<ul>
				<li><a href="MisionVision.php">Misi??n</a></li>
				<li><a href="MisionVision.php">Visi??n</a></li>
				<li><a href="Quienes.php">??Qui??nes Somos?</a></li>
			
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				<li><a href="Login.php">Iniciar Sesi??n</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">?? 2021 TIENDA MICHELITA. Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
	</div>
</div>
<?php
}
?>
</body>
</html>