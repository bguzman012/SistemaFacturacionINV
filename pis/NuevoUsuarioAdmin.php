<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>NUEVO ADMINISTRADOR</title>
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
$cedula="";
$nombres="";
$apellidos="";
$telefono="";
$direccion="";
$usuario="";
$emailadmin="";
$password="";
$password1="";
$resultado="";
$resultado2="";
$resultado3="";
$resultado4="";
if(isset($_POST["btnguardar"]))
{
    $cedula=trim($_POST["txtcedula"]);
    $nombres=trim($_POST["txtnombres"]);
    $apellidos=trim($_POST["txtapellidos"]);
    $telefono=trim($_POST["txttelefono"]);
    $direccion=trim($_POST["txtdireccion"]);
    $usuario=trim($_POST["txtusuario"]);
    $emailadmin=trim($_POST["txtemail"]);
    $password=trim($_POST["txtpassword"]);
    $password1=trim($_POST["txtpassword1"]);
    
    $objadmin->cedula=$cedula;
    $objadmin->nombres=$nombres;
    $objadmin->apellidos=$apellidos;
    $objadmin->telefono=$telefono;
    $objadmin->direccion=$direccion;
    $objadmin->usuario=$usuario;
    $objadmin->emailadmin=$emailadmin;
    $objadmin->password=$password;
    
	if ($objadmin->validarcedula($cedula)) 
	{
    	if($password == $password1)
    	{
		    $valor2= $objadmin->buscar();
		    if ($valor2==true)
		    {
		        $resultado2="<div class='alert alert-success'>Registro existente</div>";
		    }
		    else
		    {
		        $valor= $objadmin->guardar();
		        if($valor==true)
		        {
					$cedula="";
					$nombres="";
					$apellidos="";
					$telefono="";
					$direccion="";
					$usuario="";
					$emailadmin="";
					$password="";
					$password1="";
		            $resultado="<div class='alert alert-success'>exito al guardar</div>";
		    
		        }
		        else
		        {
		            $resultado="<div class='alert alert-danger'>No se pudo guardar</div>";
		        }
		    }
		}
		else
		{
        	$resultado3="<div class='alert alert-success'>Las contraseñas no coinciden</div>";
		}	
	}
	else
	{
	    $resultado4="<div class='alert alert-success'>Cedula incorrecta no se puede registrar</div>";
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
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
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
					<i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO ADMINISTRADOR
				</h3>
				<p class="text-justify">
					Cree, Liste, Actualice o Elimine una cuenta de administrador...
				</p>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="NuevoUsuarioAdmin.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO ADMINISTRADOR</a>
					</li>
					<li>
						<a href="ListarUsuarioAdmin.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ADMINISTRADORES</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off" method="post">
                            <div class="modal fade" id="myModalguardar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Mensaje del sistema</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                           Esta seguro que desea guardar la informacion del administrador                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary"  type="submit" name="btnguardar"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="admin_cedula" class="bmd-label-floating">C.I</label>
										<input type="text" value="<?php echo $cedula; ?>" class="form-control" name="txtcedula" id="txtcedula" maxlength="10">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="admin_nombre" class="bmd-label-floating">Nombres</label>
										<input type="text" value="<?php echo $nombres; ?>" class="form-control" name="txtnombres" id="txtnombres" maxlength="50">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="admin_apellido" class="bmd-label-floating">Apellidos</label>
										<input type="text" value="<?php echo $apellidos; ?>" class="form-control" name="txtapellidos" id="txtapellidos" maxlength="50">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_telefono" class="bmd-label-floating">Teléfono</label>
										<input type="text" value="<?php echo $telefono; ?>" class="form-control" name="txttelefono" id="txttelefono" maxlength="10">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_direccion" class="bmd-label-floating">Dirección</label>
										<input type="text" value="<?php echo $direccion; ?>" class="form-control" name="txtdireccion" id="txtdireccion" maxlength="100">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_usuario" class="bmd-label-floating">Nombre de usuario</label>
										<input type="text" value="<?php echo $usuario; ?>" class="form-control" name="txtusuario" id="txtusuario" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_email" class="bmd-label-floating">E-mail</label>
										<input type="email" value="<?php echo $emailadmin; ?>" class="form-control" name="txtemail" id="txtemail" maxlength="70">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_clave_1" class="bmd-label-floating">Contraseña</label>
										<input type="password" value="<?php echo $password; ?>" class="form-control" name="txtpassword" id="txtpassword" maxlength="30">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="admin_clave_2" class="bmd-label-floating">Repetir contraseña</label>
										<input type="password" value="<?php echo $password1; ?>" class="form-control" name="txtpassword1" id="txtpassword1" maxlength="30">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
                            <?php echo $resultado; ?>
                            <?php echo $resultado2; ?>
                            <?php echo $resultado3; ?>
                            <?php echo $resultado4; ?>
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button data-toggle="modal" data-target="#myModalguardar" type="button" class="btn btn-raised btn-success btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
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