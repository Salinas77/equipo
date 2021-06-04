<?php
  
  $controlador = new controladorProductos();
    if(isset($_POST['registrar'])){
      $r=$controlador->crear($_POST['nombre'],$_POST['existencia'],$_POST['precio_com'],$_POST['precio_ven'],$_POST['categoria']);

    if($r){
      echo "
        <script>
        if(confirm(\"¿Desea realizar un nuevo registro?\")){
          window.location.href='?cargar=registrarProductos';
        }else{
          window.location.href='?cargar=consultarProductos';
        }
        </script>";
    }
  }

?>

   <!-- registrar productos-->
      <section style="background-image:url(img/resfondo.jpg)">
          <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-6">
                  <div class="modal-content" style="margin-top: 150px;margin-bottom: 100px; background-image:url(img/fondo_cua.jpg);background-position: center;background-size: cover;">
                    <div class="panel panel-primary col-md-12">
                       <nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarProductos">Productos</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarProductos">Registrar</a></li>
                        </ol>
                        </nav>                                    
                      <!-- Inicia la tabla -->
                      <table width="100%" style="line-height: 3.5; font-size: 1rem">
                        <form action="" method="POST" id="frmproductos">
                        <tr class="espacio"> 
                          <td align="right"
                          ght"> <label for="nombre">Nombre:</label></td><td><input type="text" class="form-control col-md-11 name="nombre" id="nombre" placeholder="Ingrese su nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();”></td>
                        </tr> 
                        <tr class="espacio"> 
                          <td align="right"> <label for="existencia">Existencia:</label></td><td><input type="number" class="form-control col-md-11" name="existencia" id="existencia" placeholder="Ingrese la existencia"required></td>
                        </tr> 
                        <tr class="espacio"> 
                          <td align="right"> <label for="precio_com">Precio compra:</label></td><td><input type="number" step="any" class="form-control col-md-11" name="precio_com" id="precio_com" placeholder="Ingrese el precio compra" required></td>
                        </tr> 
                        <tr class="espacio"> 
                          <td align="right"> <label for="precio_ven">Precio venta:</label></td><td><input type="number" step="any"class="form-control col-md-11" name="precio_ven" id="precio_ven"placeholder="Ingrese el precio venta" required></td>
                        </tr>                    
                        <tr class="espacio"> 
                          <td align="right"> <label for="categoria">Categoria:</label></td><td><input type="text" class="form-control col-md-11" name="categoria" id="categoria" placeholder="Ingrese la categoria del producto" required></td>
                        </tr>
                        <tr>
                          <td align="center" colspan="2"><input class="btn_2" type="submit" value="Registrar"  title="Registrar" name="registrar"></td>
                        </tr>                      
                      </form>
                    </table>
                      <!-- termina la tabla -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>