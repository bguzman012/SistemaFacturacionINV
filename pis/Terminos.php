<!DOCTYPE html>
<html lang="en">
<head>
<title>Terminos y Condiciones</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/Terminos.css" type="text/css" media="all" />
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
												<li><a href="Pagos.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Tipos de Pagos</a></li>
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
												<li><a href="Productos.php?cat=13"><i class="fa fa-angle-right" aria-hidden="true"></i>Zona Gamer</a>
												</li>
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
												<li><a href="Login.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Iniciar Sesi??n</a></li>
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
</div><br><br>
					<div align="justify" class="container">
						<h3>POL??TICA DE PRIVACIDAD</h3><br>
						<p>
						El presente Pol??tica de Privacidad establece los t??rminos en que TIENDA MICHELITA usa y protege la informaci??n que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compa????a est?? comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de informaci??n personal con la cual usted pueda ser identificado, lo hacemos asegurando que s??lo se emplear?? de acuerdo con los t??rminos de este documento. Sin embargo esta Pol??tica de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta p??gina para asegurarse que est?? de acuerdo con dichos cambios.</p><br><br>

						<p><b>Informaci??n que es recogida</b></p><br>

						<p>Nuestro sitio web podr?? recoger informaci??n personal por ejemplo: Nombre,  informaci??n de contacto como  su direcci??n de correo electr??nica e informaci??n demogr??fica. As?? mismo cuando sea necesario podr?? ser requerida informaci??n espec??fica para procesar alg??n pedido o realizar una entrega o facturaci??n.</p><br><br>

						<p><b>Uso de la informaci??n recogida</b></p><br>

						<p>Nuestro sitio web emplea la informaci??n con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electr??nicos peri??dicamente a trav??s de nuestro sitio con ofertas especiales, nuevos productos y otra informaci??n publicitaria que consideremos relevante para usted o que pueda brindarle alg??n beneficio, estos correos electr??nicos ser??n enviados a la direcci??n que usted proporcione y podr??n ser cancelados en cualquier momento.</p>

						<p>TIENDA MICHELITA est?? altamente comprometido para cumplir con el compromiso de mantener su informaci??n segura. Usamos los sistemas m??s avanzados y los actualizamos constantemente para asegurarnos que no exista ning??n acceso no autorizado.</p><br><br>

						<p><b>Cookies</b></p><br>

						<p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener informaci??n respecto al tr??fico web, y tambi??n facilita las futuras visitas a una web recurrente. Otra funci??n que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p><br>

						<p>Nuestro sitio web emplea las cookies para poder identificar las p??ginas que son visitadas y su frecuencia. Esta informaci??n es empleada ??nicamente para an??lisis estad??stico y despu??s la informaci??n se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, est??s no dan acceso a informaci??n de su ordenador ni de usted, a menos de que usted as?? lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayor??a de navegadores aceptan cookies autom??ticamente pues sirve para tener un mejor servicio web. Tambi??n usted puede cambiar la configuraci??n de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><br><br>

						<p><b>Enlaces a Terceros</b></p><br>

						<p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su inter??s. Una vez que usted de clic en estos enlaces y abandone nuestra p??gina, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los t??rminos o privacidad ni de la protecci??n de sus datos en esos otros sitios terceros. Dichos sitios est??n sujetos a sus propias pol??ticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted est?? de acuerdo con estas.<p><br><br>

						<p><b>Control de su informaci??n personal</b><p><br>

						<p>En cualquier momento usted puede restringir la recopilaci??n o el uso de la informaci??n personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opci??n de recibir informaci??n por correo electr??nico.  En caso de que haya marcado la opci??n de recibir nuestro bolet??n o publicidad usted puede cancelarla en cualquier momento.</p><br>

						<p>Esta compa????a no vender??, ceder?? ni distribuir?? la informaci??n personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><br><br><br>

						<p><i>TIENDA MICHELITA Se reserva el derecho de cambiar los t??rminos de la presente Pol??tica de Privacidad en cualquier momento.
						</p></i><br><br>
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
				<li><a href="Marcas.php">Marcas</a></li>
				<li><a href="Contacto.php">Contacto</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Nosotros</h4> 
			<ul>
				<li><a href="MisionVision.php">Misi??n</a></li>
				<li><a href="MisionVision.php">Visi??n</a></li>
				<li><a href="Quienes.php">??Qui??nes Somos?</a></li>
				<li><a href="Pagos.php">Tipos de Pagos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>Mi Cuenta</h4> 
			<ul>
				<li><a href="Login.php">Iniciar Sesi??n</a></li>
				<li><a href="Registrarse.php">Registrarse</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">?? 2021 TIENDA MICHELITA. Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
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
						<span class="sr-only">Men??</span>
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
												<li><a href="Quienes.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>??Qui??nes Somos?</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Misi??n</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Visi??n</a></li>
												<li><a href="MisionVision.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Servicios</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="Pagos.php?id=<?php echo $id;?>"> <i class="fa fa-angle-right" aria-hidden="true"></i>Tipos de Pagos</a></li>
												<li><a href="Terminos.php?id=<?php echo $id;?>"><i class="fa fa-angle-right" aria-hidden="true"></i>T??rminos y Condiciones</a></li>
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
</div><br><br>
					<div align="justify" class="container">
						<h3>POL??TICA DE PRIVACIDAD</h3><br>
						<p>
						El presente Pol??tica de Privacidad establece los t??rminos en que TIENDA MICHELITA usa y protege la informaci??n que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compa????a est?? comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de informaci??n personal con la cual usted pueda ser identificado, lo hacemos asegurando que s??lo se emplear?? de acuerdo con los t??rminos de este documento. Sin embargo esta Pol??tica de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta p??gina para asegurarse que est?? de acuerdo con dichos cambios.</p><br><br>

						<p><b>Informaci??n que es recogida</b></p><br>

						<p>Nuestro sitio web podr?? recoger informaci??n personal por ejemplo: Nombre,  informaci??n de contacto como  su direcci??n de correo electr??nica e informaci??n demogr??fica. As?? mismo cuando sea necesario podr?? ser requerida informaci??n espec??fica para procesar alg??n pedido o realizar una entrega o facturaci??n.</p><br><br>

						<p><b>Uso de la informaci??n recogida</b></p><br>

						<p>Nuestro sitio web emplea la informaci??n con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electr??nicos peri??dicamente a trav??s de nuestro sitio con ofertas especiales, nuevos productos y otra informaci??n publicitaria que consideremos relevante para usted o que pueda brindarle alg??n beneficio, estos correos electr??nicos ser??n enviados a la direcci??n que usted proporcione y podr??n ser cancelados en cualquier momento.</p>

						<p>TIENDA MICHELITA est?? altamente comprometido para cumplir con el compromiso de mantener su informaci??n segura. Usamos los sistemas m??s avanzados y los actualizamos constantemente para asegurarnos que no exista ning??n acceso no autorizado.</p><br><br>

						<p><b>Cookies</b></p><br>

						<p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener informaci??n respecto al tr??fico web, y tambi??n facilita las futuras visitas a una web recurrente. Otra funci??n que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p><br>

						<p>Nuestro sitio web emplea las cookies para poder identificar las p??ginas que son visitadas y su frecuencia. Esta informaci??n es empleada ??nicamente para an??lisis estad??stico y despu??s la informaci??n se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, est??s no dan acceso a informaci??n de su ordenador ni de usted, a menos de que usted as?? lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayor??a de navegadores aceptan cookies autom??ticamente pues sirve para tener un mejor servicio web. Tambi??n usted puede cambiar la configuraci??n de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><br><br>

						<p><b>Enlaces a Terceros</b></p><br>

						<p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su inter??s. Una vez que usted de clic en estos enlaces y abandone nuestra p??gina, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los t??rminos o privacidad ni de la protecci??n de sus datos en esos otros sitios terceros. Dichos sitios est??n sujetos a sus propias pol??ticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted est?? de acuerdo con estas.<p><br><br>

						<p><b>Control de su informaci??n personal</b><p><br>

						<p>En cualquier momento usted puede restringir la recopilaci??n o el uso de la informaci??n personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opci??n de recibir informaci??n por correo electr??nico.  En caso de que haya marcado la opci??n de recibir nuestro bolet??n o publicidad usted puede cancelarla en cualquier momento.</p><br>

						<p>Esta compa????a no vender??, ceder?? ni distribuir?? la informaci??n personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><br><br><br>

						<p><i>TIENDA MICHELITA Se reserva el derecho de cambiar los t??rminos de la presente Pol??tica de Privacidad en cualquier momento.
						</p></i><br><br>
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
				<li><a href="index.php?id=<?php echo $id;?>">Inicio</a></li>
				<li><a href="Marcas.php?id=<?php echo $id;?>">Marcas</a></li>
				<li><a href="Contacto.php?id=<?php echo $id;?>">Contacto</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Nosotros</h4> 
			<ul>
				<li><a href="MisionVision.php?id=<?php echo $id;?>">Misi??n</a></li>
				<li><a href="MisionVision.php?id=<?php echo $id;?>">Visi??n</a></li>
				<li><a href="Quienes.php?id=<?php echo $id;?>">??Qui??nes Somos?</a></li>
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
		<p class="copy-right">?? 2021 TIENDA MICHELITA. Todos los Derechos Reservados | Por: <a href="#">TIENDA MICHELITA</a></p>
	</div>
</div>
<?php
}
?>
</body>
</html>