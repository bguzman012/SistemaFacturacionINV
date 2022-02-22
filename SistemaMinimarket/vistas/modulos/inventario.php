<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Inventario
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Inventario</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Tipo actividad</th>
           <th>Codigo Producto</th>           
           <th>Producto</th>
           <th>Existencias antes</th>
           <th>Cantidad</th>
           <th>Existencias ahora</th>
           <th>Precio</th>
           <th>Fecha y hora</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $clientes = ControladorInventario::ctrMostrarInventarios($item, $valor);

          foreach ($clientes as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["tipo_accion"].'</td>

                    <td>'.$value["codigo"].'</td>

                    <td>'.$value["nombre_producto"].'</td>

                    <td>'.$value["existencias"].'</td>

                    <td>'.$value["cantidad"].'</td>

                    <td>'.$value["existencias_ahora"].'</td>         
                        

                    <td>'.number_format($value["precio"], 2).'</td>

                    <td>'.$value["fecha_hora_accion"].'</td>

                    
                  </tr>';
          
            }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>




