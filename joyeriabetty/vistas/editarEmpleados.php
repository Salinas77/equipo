<?php

$controlador = new controladorEmpleado();
if(isset($_GET['id_empleado'])){
	$row=$controlador->consultar($_GET['id_empleado']);

}else{
	header('Location: "?cargar=consultarEmpleados"');
}

if(isset($_POST['modificar'])){
		$r=$controlador->editar($_GET['id_empleado'],$_POST['nombre_completo'],$_POST['tel'],$_POST['email'],$_POST['fecha_nac'],$_POST['usuario'],$_POST['pass'],$_POST['ciudad'],$_POST['sexo'],$_POST['c_bancaria'],$_POST['sueldo']);
    if ($row['usuario']==$_SESSION['user'] AND $row['pass']==$_SESSION['pass']){
      if ($_SESSION['user']==$_POST['usuario'] AND $_SESSION['pass']==$_POST['pass']){	

		    if($r){
			   echo "
			   <script languaje='javaScript'>
			   alert('Registro modificado');
			   document.location='?cargar=consultarEmpleados';
			   </script>";
       }
		  }else{
        if($r){
        echo "
        <script languaje='javaScript'>
        alert('Registro modificado... El usuario y/o contraseña ha sido modificado');
        document.location='?cargar=cerrar';
        </script>";
      }
    }
  }else{
    echo "
      <script languaje='javaScript'>
      alert('Registro modificado');
      document.location='?cargar=consultarEmpleados';
      </script>";
  }
}
?> 
   <!-- consultar empleado-->
          <section style="background-image:url(img/resfondo.jpg)">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-6">
                  <div class="modal-content" style="margin-top: 150px;margin-bottom: 100px; background-image:url(img/fondo_cua.jpg);background-position: center;background-size: cover;">
                    <div class="panel panel-primary col-md-12">
                     <nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarEmpleados">Empleados</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarEmpleados">Registrar</a></li>
                        </ol>
                        </nav>                  
                      <!-- Inicia la tabla -->
                      <table width="100%" style="line-height: 3.5; font-size: 1rem">
                        <form action="" method="POST" id="frmeditar_empleado">
                          <tr class="espacio"> 
                            <td align="right"> <label for="nombre_completo">Nombre completo:</label></td><td><input type="text" class="form-control col-md-11" name="nombre_completo" id="nombre_completo" placeholder="Coloca un nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();” value="<?php echo $row['nombre_completo']; ?>"></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="tel">Teléfono:</label></td><td><input type="tel" class="form-control col-md-11" name="tel" id="tel" value="<?php echo $row['tel']; ?>" required pattern="[0-9]{9,10}"></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="email">Email:</label></td><td><input type="email" class="form-control col-md-11" name="email" id="email" value="<?php echo $row['email']; ?>" required></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="fecha_nac">Fecha de nacimiento:</label></td><td><input type="date" class="form-control col-md-11" name="fecha_nac" id="fecha_nac" value="<?php echo $row['fecha_nac']; ?>" required></td>
                          </tr>                    
                          <tr class="espacio"> 
                            <td align="right"> <label for="usuario">Usuario:</label></td><td><input type="text" class="form-control col-md-11" name="usuario" id="usuario" value="<?php echo $row['usuario']; ?>" required></td>
                          </tr>                              
                          <tr class="espacio"> 
                            <td align="right"> <label for="pass">Contraseña:</label></td><td><input type="pass" class="form-control col-md-11" name="pass" id="pass" value="<?php echo $row['pass']; ?>" required></td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="ciudad">Ciudad:</label></td><td><input type="text" class="form-control col-md-11" name="ciudad" id="ciudad" value="<?php echo $row['ciudad']; ?>" required></td>
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
                              </select>
                            </td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="c_bancaria">Cuenta bancaria:</label></td><td><input type="text" class="form-control col-md-11" name="c_bancaria" id="c_bancaria" value="<?php echo $row['c_bancaria']; ?>" required></td>
                          </tr>                              
                          <tr class="espacio"> 
                            <td align="right"> <label for="sueldo">Sueldo:</label></td><td><input type="number" class="form-control col-md-11" name="sueldo" id="sueldo" value="<?php echo $row['sueldo']; ?>" required></td>
                          </tr>                              
                          <tr>
                            <td align="center" colspan="2"><input type="submit"  class="btn_2" value="modificar"  title="Modificar" name="modificar"></td>
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