<?php

$controlador = new controladorClientes();
if(isset($_GET['id_cliente'])){
	$row=$controlador->consultar($_GET['id_cliente']);

}else{
	header('Location: "?cargar=consultarClientes"');
}

if(isset($_POST['editar'])){
	$r=$controlador->editar($_GET['id_cliente'],$_POST['nombre_completo'],$_POST['direccion'],$_POST['tel'],$_POST['email'],$_POST['fecha_nac'],$_POST['sexo']);

	if($r){
		echo "
		<script languaje='javaScript'>
		alert('Registro modificado');
		document.location='?cargar=consultarClientes';
		</script>";
	}
}
?>

?>
   <!-- consultar clientes-->
        <section style="background-image:url(img/resfondo.jpg)">
          <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-6">
                  <div class="modal-content" style="background-color: #2192b5; margin-top: 150px;margin-bottom: 100px; background-image:url(img/fondo_cua.jpg);background-position: center;background-size: cover;">
                    <div class="panel panel-primary col-md-12">
                     <nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarClientes">Clientes</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarClientes">Registrar</a></li>
                        </ol>
                        </nav>      
                      <!-- Inicia la tabla -->
                      <table width="100%" style="line-height: 3.5; font-size: 1rem">
                        <form action="" method="POST" id="frmeditar_clientes">
                          <tr class="espacio"> 
                            <td align="right"> <label for="nombre_completo">Nombre completo:</label></td><td><input type="text" class="form-control col-md-11" name="nombre_completo" id="nombre_completo" placeholder="Coloca un nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();” value="<?php echo $row['nombre_completo']; ?>"></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="direccion">Direccion:</label></td><td><input type="text" class="form-control col-md-11" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>" required></td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="tel">Telefono:</label></td><td><input type="tel" class="form-control col-md-11" name="tel" id="tel" value="<?php echo $row['tel']; ?>" required pattern="[0-9]{9,10}" ></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="email">Email:</label></td><td><input type="email" class="form-control col-md-11" name="email" id="email" value="<?php echo $row['email']; ?>" required></td>
                          </tr>
                          <tr class="espacio">
                            <td align="right"> <label for="fecha_nac">Fecha de nacimiento:</label></td><td><input type="Date" class="form-control col-md-11" name="fecha_nac" id="fecha_nac" value="<?php echo $row['fecha_nac']; ?>" required></td>
                          </tr>                              
                          <tr class="espacio"> 
                            <td align="right"> <label for="sexo">Sexo:</label></td><td><select  class="form-control col-md-11" name="sexo" id="sexo">
                              <option value="<?php echo $row['sexo']; ?>"><?php echo $row['sexo']; ?></option>           
                                <?php if($row['sexo']=='Hombre')
                                {
                                  echo "<option value='Mujer'>Mujer</option>";
                                }
                                else if($row['sexo']=='Mujer')
                                {
                                  echo "<option value='Hombre'>Hombre</option>";
                                }
                                ?>
                            </select></td>
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