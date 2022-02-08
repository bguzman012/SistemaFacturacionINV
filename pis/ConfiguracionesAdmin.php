<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CONFIGURACIONES</title>


	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./cssAdmin/normalize.css">
	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./cssAdmin/bootstrap.min.css">
	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./cssAdmin/bootstrap-material-design.min.css">
	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./cssAdmin/all.css">
	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./cssAdmin/sweetalert2.min.css">
	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./jsAdmin/sweetalert2.min.js" ></script>
	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./cssAdmin/jquery.mCustomScrollbar.css">
	<!-- Stilos Generales -->
	<link rel="stylesheet" href="./cssAdmin/Jos.css">

</head>
<body>
<!--===================================================Menú=====================================================-->
<?php
session_start();
error_reporting(0);
$validacion=$_SESSION['nombre_adm'];
if($validacion== null || $validacion ='')
{
    //echo "Primero inicie sesion";
    header("location: Login.php");
    die();
}
if(isset($_POST["btnsalir"]))
{
    session_destroy();
    header("location: index.php");
}
include_once("capalogica/claseadministrador.php");
$objadmin= new claseadministrador();
$usuario="";
$password="";
$password1="";
$password2="";
$resultado="";
if(isset($_POST["btnactualizar"]))
{

    $usuario=trim($_POST["txtusuario"]);
    $password=trim($_POST["txtpassword"]);
    $password1=trim($_POST["txtpassword1"]);
    $password2=trim($_POST["txtpassword2"]);
    
    $objadmin->usuario=$usuario;
    $objadmin->password=$password;

    $valor1= $objadmin->buscarb();
    if ($valor1==true)
    {

	    if($password1 == $password2)
	    {
	    	$objadmin->password=$password1;
			$valor= $objadmin->actualizarc();
			if($valor==true)
			{
				$usuario="";
				$password1="";
				$password2="";
				$password="";  
				$resultado="<div class='alert alert-success'>exito al guardar</div>";
			}
			else
			{
			    $resultado="<div class='alert alert-danger'>No se pudo actualizar</div>";
			}
		}
		else
		{
			$resultado="<div class='alert alert-danger'>Las contraseñas no coinciden</div>";
		}
	}
	else
	{
		$resultado="<div class='alert alert-danger'>Usuario o Contraseña no registrado</div>";
	}
}
?>
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<a href="Admin.php"><i class="far fa-times-circle show-nav-lateral"></i>
					<img src="images/Logos/pc.png" class="img-fluid" alt="Avatar"></a>
					<figcaption class="roboto-medium text-center">
						<?php echo $_SESSION['nombre_adm'] ?> <br><small class="roboto-condensed-light">TIENDA MICHELITA</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="Admin.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; INICIO</a>
						</li>
<!--=============================================================================================-->
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; CLIENTES <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="NuevoClienteAdmin.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar clientes</a>
								</li>
								<li>
									<a href="ListarClienteAdmin.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
							</ul>
						</li>
<!--=============================================================================================-->
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-box-open"></i> &nbsp; PRODUCTO <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="NuevoProductoAdmin.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar productos</a>
								</li>
								<li>
									<a href="ListarProductoAdmin.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de productos</a>
								</li>

							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; ADMINISTRADORES <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="NuevoUsuarioAdmin.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Administrador</a>
								</li>
								<li>
									<a href="ListarUsuarioAdmin.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Administradores</a>
								</li>
							</ul>
						</li>
<!--=============================================================================================-->

						<li>
							<a href="AdminReportes.php"><i class="fas fa-file-pdf fa-fw"></i> &nbsp; REPORTES</a>
						</li>
						<br>
					</ul>
				</nav>
			</div>
		</section>
<!---=======================================================================================================================-->
<form method="post" action="">
	                            <div class="modal fade" id="myModalsalir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        	<h4 class="modal-title" id="myModalLabel">Mensaje del sistema</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div align="text-justify" class="modal-body">
                                           Esta seguro que desea salir del sistema                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary"  type="submit" name="btnsalir"><i class="fas fa-power-off"></i> &nbsp;&nbsp; Salir</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
</form>
		<!-- Contenido de la Página -->
		<section class="full-box page-content">
			<form action="" method="post">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral">
					<i class="fas fa-exchange-alt"></i>
				</a>
				<a href="ConfiguracionesAdmin.php">
					<i class="fas fa-user-cog"></i>
				</a>				
				<button type="button" data-toggle="modal" class="btn btn-raised btn-secondary btn-sm" data-target="#myModalsalir">
					<i class="fas fa-power-off"></i>
				</button>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR CUENTA ACTIVA
				</h3>
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off" method="post">
                           <div class="modal fade" id="myModalactualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Mensaje del sistema</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div align="text-justify" class="modal-body">
                                           Esta seguro que desea modificar la informacion del administrador                                         
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary"  type="submit" name="btnactualizar"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Actualizar</button>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; PROPORCIONE DATOS DE LA CUENTA ACTIVA</legend>
											<br>
						<fieldset>
						<p class="text-center">Para poder guardar los cambios en esta cuenta debe de ingresar su nombre de usuario y contraseña</p>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_admin" class="bmd-label-floating">Nombre de usuario actual</label>
										<input type="text" value="<?php $usuario ?>" class="form-control" name="txtusuario" id="txtusuario" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="clave_admin" class="bmd-label-floating">Contraseña actual</label>
										<input type="password" value="<?php $password ?>" class="form-control" name="txtpassword" id="txtpassword" maxlength="200">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<legend style="margin-top: 40px;"><i class="fas fa-lock"></i> &nbsp; Nueva contraseña</legend>
									<p>Para actualizar la contraseña de esta cuenta ingrese una nueva y vuelva a escribirla. En caso que no desee actualizarla debe dejar vacíos los dos campos de las contraseñas.</p>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_clave_nueva_1" class="bmd-label-floating">Contraseña Nueva</label>
										<input type="password" value="<?php $password1 ?>" class="form-control" name="txtpassword1" id="txtpassword1" maxlength="200">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_clave_nueva_2" class="bmd-label-floating">Repetir Contraseña Nueva</label>
										<input type="password" value="<?php $password2 ?>" class="form-control" name="txtpassword2" id="txtpassword2" maxlength="200">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<?php echo $resultado;?>
						<button data-toggle="modal" data-target="#myModalactualizar" type="button" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>
			

		</section>
	</main>
	
	
	<!--=============================================
	=          Incluye Archivos JavaScript          =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="jsAdmin/jquery-3.4.1.min.js" ></script>
	<!-- Corchete -->
	<script src="jsAdmin/popper.min.js" ></script>
	<!-- Bootstrap V4.3 -->
	<script src="jsAdmin/bootstrap.min.js" ></script>
	<script src="jsAdmin/jquery.mCustomScrollbar.concat.min.js" ></script>
	<!-- Bootstrap Material V4.0 -->
	<script src="jsAdmin/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	<script src="jsAdmin/main15.js" ></script>
</body>
</html>