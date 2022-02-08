<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>NUEVO PRODUCTO</title>
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
<?php
session_start();
//error_reporting(0);
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

include("capalogica/claseproducto.php");
$objpro= new claseproducto(); 
$ruta="producto";
$idproducto="";
$nombreproducto="";
$precio="";
$cantidad="";
$color="";
$marcap="";
$marca="";
$categoria="";
$categoriap="";
$descripcion="";
$stok="";
$resultado="";
$valor="";
if(isset($_POST["btnguardar"]))
{
    $nombreproducto=trim($_POST["txtnombreproducto"]);
    $precio=trim($_POST["txtprecio"]);
    $cantidad=trim($_POST["txtcantidad"]);
    $color=trim($_POST["txtcolor"]);
    $marcap=trim($_POST["txtidmarca"]);
    $categoriap=trim($_POST["txtidcategoria"]);
    $descripcion=trim($_POST["txtdescripcion"]);
    $stok=trim($_POST["combstok"]);

    $nombreimg=$_FILES['foto1']['name'];
    $tipoimg=$_FILES['foto1']['type'];
    $tamanioimg=$_FILES['foto1']['size'];
    $archivo=$_FILES['foto1']['tmp_name'];
    $ruta= $ruta . "/" . $nombreimg;
    move_uploaded_file($archivo, $ruta);
    
    $objpro->nombreproducto=$nombreproducto;
    $objpro->precio=$precio;
    $objpro->cantidad=$cantidad;
    $objpro->color=$color;
    $objpro->marcap=$marcap;
    $objpro->categoriap=$categoriap;
    $objpro->descripcion=$descripcion;
    $objpro->foto=$ruta;
    $objpro->stok=$stok;

    $valor2= $objpro->busqueda();
    if($valor2==true)
    {
        $resultado="<div class='alert alert-warning'>Registro Existente</div>";
        //header("location: FRMlibro.php?id=2");
    }
    else
    {
        $valor= $objpro->guardar();
        if($valor==true)
        {
			$idproducto="";
			$nombreproducto="";
			$precio="";
			$cantidad="";
			$color="";
			$marcap="";
			$categoriap="";
			$descripcion="";
			$stok="";

            $resultado="<div class='alert alert-success'>Exito al Guardar</div>";
            //header("location: FRMlibro.php?id=1");
        }
        else
        {
            $resultado="<div class='alert alert-warning'>Error al Guardar</div>";
            //header("location: FRMlibro.php?id=0");
        }
    }
}

?>
<!--===================================================Menú=====================================================-->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<a href="Admin.php"><i class="far fa-times-circle show-nav-lateral"></i>
					<img src="images/Logos/pc.png" class="img-fluid" alt="Avatar"></a>
					<figcaption class="roboto-medium text-center">
						<?php echo $_SESSION['nombre_adm'] ?> <br><small class="roboto-condensed-light">Jortech</small>
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
<!--=============================================================================================-->

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
		<!-- Page content -->
		<section class="full-box page-content">
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
					<i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO
				</h3>
				<p class="text-justify">
					Cree, Liste, Actualice o Elimine un Producto...
				</p>
			</div>
			
			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="NuevoProductoAdmin.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO</a>
					</li>
					<li>
						<a href="ListarProductoAdmin.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<form action="" method="post" enctype="multipart/form-data" class="form-neon" autocomplete="off">
                            <div class="modal fade" id="myModalguardar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Mensaje del sistema</h4>                                       	
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                           Esta seguro que desea guardar la informacion del producto                                          
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-primary"  type="submit" name="btnguardar"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                            <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="myModallistacategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        	<h4 class="modal-title" id="myModalLabel">Listado de Categorias</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                           
                                                        <?php
                                                            $cate = $objpro->listarcategoria();                                                        
                                                            echo "<table id='miTable' class='display' width='100%' border='1'>
                                                            <thead>
                                                              <tr>
                                                                <td>ID</td>
                                                                <td>CATEGORIA</td>
                                                                <td>BOTONES</td>
                                                              </tr>
                                                            </thead>
                                                            <tboby>";
                                                              $c=0;
                                                            foreach($cate as $row =>$item)
                                                            {
                                                                $c++;
                                                                echo "<tr>";
                                                                    echo "<td><label id='lblidcategoria$c'>" . $item["idcategoria"] . "</td>";
                                                                    echo "<td><label id='lblcategoria$c'>" . $item["categoria"] . "</td>";
                                                                   echo "<td> <button type='button' class='btn btn-raised btn-info btn-sm' id='btnagregar$c' onclick='agregarc(" . $c . ")'><i class='far fa-save'></i> </button></td>";
                                                               echo "</tr>";
                                                            }
                                                            echo "</tbody></table>";
                                                        ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="myModallistamarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Listado de Marcas</h4>                                        	
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                           
                                                        <?php
                                                        	$mar = $objpro->listarmarcas();
                                                            echo "<table id='miTable' class='display' width='100%' border='1'>
                                                            <thead>
                                                              <tr>
                                                                <td>ID</td>
                                                                <td>MARCA</td>
                                                                <td>BOTONES</td>
                                                              </tr>
                                                            </thead>
                                                            <tboby>";
                                                              $c=0;
                                                            foreach($mar as $row =>$item)
                                                            {
                                                                $c++;
                                                                echo "<tr>";
                                                                    echo "<td><label id='lblidmarca$c'>" . $item["idmarca"] . "</td>";
                                                                    echo "<td><label id='lblmarca$c'>" . $item["marca"] . "</td>";
                                                                   echo "<td> <button type='button' class='btn btn-raised btn-info btn-sm' id='btnagregar$c' onclick='agregarm(" . $c . ")'><i class='far fa-save'></i> </button></td>";
                                                               echo "</tr>";
                                                            }
                                                            echo "</tbody></table>";
                                                        ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Información del Producto</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="titulopro" class="bmd-label-floating">Título del Producto</label>
										<input type="text" class="form-control" name="txtnombreproducto" id="txtnombreproducto" maxlength="28">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<label for="precio" class="bmd-label-floating">Precio</label>
										<input type="number" step="0.1" class="form-control" name="txtprecio" id="txtprecio">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<label for="cantidad" class="bmd-label-floating">Cantidad</label>
										<input type="number" class="form-control" name="txtcantidad" id="txtcantidad">
									</div>
								</div>
								<div class="col-12 col-md-2">
									<div class="form-group">
										<label for="color" class="bmd-label-floating">Color</label>
										<input type="text" class="form-control" name="txtcolor" id="txtcolor" maxlength="15">
									</div>
								</div>
<!--=======================================COMBO BOXS=========================================-->
										<div class="col-12 col-md-6">
											<div class="form-group">
												<select class="form-control" name="combstok">
													<option value="" selected="" disabled="">Seleccione Stock</option>
													<option value="1">Disponible</option>
													<option value="2">Limitado</option>
													<option value="3">No disponible</option>
												</select>
											</div>
										</div>
									<div class="col-12 col-md-6">
									</div>
<!--============================================REFERENCIAS============================================-->
							<div class="col-12 col-md-6">
									<input type="text" class=" form-control" readonly style="visibility:hidden;" name="txtidcategoria" id="txtidcategoria" maxlength="15" value="<?php echo $categoriap; ?>">
									<div class="form-group">
										<label for="categoria" class="bmd-label-floating">Categoria</label>
										<input type="text" class="form-control" name="txtcategoria" id="txtcategoria" maxlength="15" value="<?php echo $categoria; ?>">
                                    	<span class="input-group-btn">
                                       	 	<button data-toggle="modal" data-target="#myModallistacategoria" type="button" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> </button>
                                   		</span>
									</div>
							</div>
							<div class="col-12 col-md-6">
									<input type="text" class=" form-control" readonly style="visibility:hidden;" name="txtidmarca" id="txtidmarca" maxlength="15" value="<?php echo $marcap; ?>">
									<div class="form-group">
										<label for="marca" class="bmd-label-floating">Marca</label>
										<input type="text" class="form-control" name="txtmarca" id="txtmarca" maxlength="15" value="<?php echo $marca; ?>">
                                    	<span class="input-group-btn">
                                       	 	<button data-toggle="modal" data-target="#myModallistamarca" type="button" class="btn btn-raised btn-secondary btn-sm"><i class="far fa-save"></i> </button>
                                   		</span>										
									</div>
							</div>
<!--=======================================BOTONES DE AGREGAR ROPA=========================================-->
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="foto1" class="bmd-label-floating">Foto 1</label>
										<input type="file" class="form-control" name="foto1" id="foto1">
									</div>
								</div>
<!--=======================================OBSERVACION DE TEXT=========================================-->
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="descrip" class="bmd-label-floating">Descripción</label>
										<textarea type="text" class="form-control" name="txtdescripcion" id="txtdescripcion" maxlength="500" style="margin-top: 0px; margin-bottom: 24px; height: 161px;"></textarea>
									</div>
								</div>
							</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
							<?php echo $resultado ?>
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button data-toggle="modal" data-target="#myModalguardar" type="button" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
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

		<link rel="stylesheet" href="DataTables/DataTables-1.10.18/css/jquery.dataTables.css"/>
	<script src="DataTables/DataTables-1.10.18/js/jquery.dataTables.js"></script></body>
<script>
       $(document).ready(function() {
        //alert ("hola");
         $('#miTable').DataTable();
         $('#txtidcategoria').val("");
         $('#txtcategoria').val("");
        });;
        
        function agregarc(fila)
        {
            //alert(fila);

            idcategoria= $("#lblidcategoria" + fila).html();
            categoria= $("#lblcategoria" + fila).html();
            //encajas de texto se utiliza val
            $('#txtidcategoria').val(idcategoria);
            $('#txtcategoria').val(categoria);
            $('#mymodallistacategoria').modal('hide');
        }                                               
       $(document).ready(function() {
        //alert ("hola");
         $('#miTable').DataTable();
         $('#txtidmarca').val("");
         $('#txtmarca').val("");
        });

        function agregarm(fila)
        {
            //alert(fila);

            idmarca= $("#lblidmarca" + fila).html();
            marca= $("#lblmarca" + fila).html();
            //encajas de texto se utiliza val
            $('#txtidmarca').val(idmarca);
            $('#txtmarca').val(marca);
            $('#mymodallistamarca').modal('hide');
        }    
       

       /** funcion para ocultar una caja de texto || para aplicarlo en la caja de texto se pone esto --- onChange=\"ocultar()\" 
       function ocultar(){
			document.all.capa.style.visibility=\"hidden\";
		}         
		**/                                  
 	</script>
</body>
</html>