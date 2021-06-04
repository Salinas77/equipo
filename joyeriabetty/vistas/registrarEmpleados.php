
<?php
  
  $controlador = new controladorEmpleado();
  if(isset($_POST['registrar'])){
    $r=$controlador->crear($_POST['nombre_completo'],$_POST['tel'],$_POST['email'],$_POST['fecha_nac'],$_POST['usuario'],$_POST['pass'],$_POST['ciudad'],$_POST['sexo'],$_POST['c_bancaria'],$_POST['sueldo']);

    if($r){
      echo "
        <script>
        if(confirm(\"¿Desea realizar un nuevo registro?\")){
          window.location.href='?cargar=registrarEmpleados';
        }else{
          window.location.href='?cargar=consultarEmpleados';
        }
        </script>";
    }
}

?>

   <!-- registrar Empleados-->
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
                      <!-- default panel contents -->                     
                      <!-- Inicia la tabla -->
                      <table width="100%" style="line-height: 3.5; font-size: 1rem">
                        <form action="" method="POST" id="frmEmpleado">
                          <tr class="espacio"> 
                            <td align="right"> <label for="nombre_completo">Nombre completo:</label></td><td><input type="text" class="form-control col-md-11" name="nombre_completo" id="nombre_completo" placeholder="Ingrese su nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();”></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="tel">Teléfono:</label></td><td><input type="tel" class="form-control col-md-11" name="tel" id="tel" placeholder="Ingrese un teléfono" required pattern="[0-9]{9,10}"></td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="email">Email:</label></td><td><input type="email" class="form-control col-md-11" name="email" id="email" placeholder="Ingrese un email" required></td>
                          </tr> 
                          <tr class="espacio"> 
                            <td align="right"> <label for="fecha_nac">Fecha de nacimiento:</label></td><td><input type="date" class="form-control col-md-11" name="fecha_nac" id="fecha_nac"placeholder="Ingrese su fecha de nacimiento" required></td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="usuario">Usuario:</label></td><td><input type="text" class="form-control col-md-11" name="usuario" id="usuario" placeholder="Ingrese un usuario" required></td>
                          </tr>                              
                          <tr class="espacio"> 
                            <td align="right"> <label for="pass">Contraseña:</label></td><td><input type="pass" class="form-control col-md-11" name="pass" id="pass" placeholder="Ingrese una contraseña" required></td>
                          </tr>

                          
                          <tr class="espacio"> 
                            <td align="right"> <label for="ciudad">Ciudad:</label></td><td><input type="text" class="form-control col-md-11" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad donde reside" required></td>
                          </tr>                              
                          <tr class="espacio"> 
                          <td align="right"><label for="sexo">Sexo:</label></td><td>
                          <label>
                          <input type="radio" name="sexo" style="margin-left:20px"; value="Hombre"> Hombre
                          </label>
                          <label>
                          <input type="radio" name="sexo" style="margin-left:20px"; value="Mujer"> Mujer
                          </label>
                          </td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="c_bancaria">Cuenta bancaria:</label></td><td><input type="text" class="form-control col-md-11" name="c_bancaria" id="c_bancaria" placeholder="Ingrese un cuenta bancaria" required></td>
                          </tr>
                          <tr class="espacio"> 
                            <td align="right"> <label for="sueldo">Sueldo:</label></td><td><input type="number" class="form-control col-md-11" name="sueldo" id="sueldo" placeholder="Ingrese un sueldo" required></td>
                          </tr>                             
                          <tr>
                            <td align="center" colspan="2"><input type="submit" class="btn_2" value="Registrar"  title="Registrar" name="registrar"></td>
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