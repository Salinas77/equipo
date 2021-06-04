<?php

$controlador = new controladorProductos();
if(isset($_GET['id_producto'])){
	$row=$controlador->consultar($_GET['id_producto']);

}else{
	header('Location: "?cargar=consultarProductos"');
}

if(isset($_POST['editar'])){
	$r=$controlador->editar($_GET['id_producto'],$_POST['nombre'],$_POST['existencia'],$_POST['precio_com'],$_POST['precio_ven'],$_POST['categoria']);

	if($r){
		echo "
		<script languaje='javaScript'>
		alert('Registro modificado');
		document.location='?cargar=consultarProductos';
		</script>";
	}
}
?>

?>
   <!-- editar productos-->
        <section style="background-image:url(img/resfondo.jpg)">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6 col-md-offset-6">
                  <div class="modal-content" style="background-color: #2192b5; margin-top: 150px;margin-bottom: 100px; background-image:url(img/fondo_cua.jpg);background-position: center;background-size: cover;">
                    <div class="panel panel-primary col-md-12">
                    <nav arial-label="breadcrumb">
                      <ol class="breadcrumb" style=" border-radius:20px">
                        <li class="breadcrumb-item"><a href="?cargar=consultarProductos">Productos</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarProductos">Registrar</a></li>
                        </ol>
                        </nav>               
                      <!-- Inicia la tabla -->
                      <table width="100%" style="line-height: 3.5; font-size: 1rem">
                        <form action="" method="POST" id="frmeditar_productos">
                          <tr class="espacio"> 
                            <td align="right"> <label for="nombre">Nombre:</label></td><td><input type="text" class="form-control col-md-11" name="nombre" id="nombre" placeholder="Coloca un nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();” value="<?php echo $row['nombre']; ?>"></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="existencia">Existencia:</label></td><td><input type="number" class="form-control col-md-11" name="existencia" id="existencia" value="<?php echo $row['existencia']; ?>" required></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="precio_com">Precio compra:</label></td><td><input type="number" step="any" class="form-control col-md-11" name="precio_com" id="precio_com" value="<?php echo $row['precio_com']; ?>" required></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="precio_ven">Precio venta:</label></td><td><input type="number" step="any"class="form-control col-md-11" name="precio_ven" id="precio_ven" value="<?php echo $row['precio_ven']; ?>" required></td>
                          </tr>                    
                          <tr class="espacio"> 
                            <td align="right"> <label for="categoria">Categoria:</label></td><td><input type="text" class="form-control col-md-11" name="categoria" id="categoria" value="<?php echo $row['categoria']; ?>" required></td>
                          </tr>                                 
                          <tr>
                            <td align="center" colspan="2"><input type="submit"  class="btn_2" value="editar"  title="Editar" name="editar"></td>
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