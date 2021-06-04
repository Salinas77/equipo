<?php
  
  $controlador = new controladorClientes();
  if(isset($_POST['registrar'])){
  $r=$controlador->crear($_POST['nombre_completo'],$_POST['direccion'],$_POST['tel'],$_POST['email'],$_POST['fecha_nac'],$_POST['sexo']);

  if($r){
    echo "
      <script>
      if(confirm(\"¿Desea realizar un nuevo registro?\")){
        window.location.href='?cargar=registrarClientes';
      }else{
        window.location.href='?cargar=consultarClientes';
      }
      </script>";
  }
}

?>

   <!-- registrar clientes-->
          <section style="background-image:url(img/resfondo.jpg)">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-6">
                  <div class="modal-content" style="margin-top: 150px;margin-bottom: 100px; background-image:url(img/fondo_cua.jpg);background-position: center;background-size: cover;">
                    <div class="panel panel-primary col-md-12">
                     <nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarClientes">Clientes</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarClientes">Registrar</a></li>
                        </ol>
                        </nav>                   
                      <!-- default panel contents -->                     
                      <!-- Inicia la tabla -->
                      <table width="100%" style="line-height: 3.5; font-size: 1rem">
                        <form action="" method="POST" id="frmclientes">
                        <tr class="espacio"> 
                          <td align="right"> <label for="nombre_completo">Nombre completo:</label></td><td><input type="text" class="form-control col-md-11" name="nombre_completo" id="nombre_completo" placeholder="Ingrese su nombre" autofocus required pattern="[A-Z a-z]{10,40}" onkeyup=”javascript:this.value=this.value.toUpperCase();”></td>
                        </tr> 
                      <tr class="espacio"> 
                        <td align="right"> <label for="direccion">Direccion:</label></td><td><input type="text" class="form-control col-md-11" name="direccion" id="direccion" placeholder="Ingrese una direccion"required></td>
                      </tr> 
                      <tr class="espacio"> 
                        <td align="right"> <label for="tel">Telefono:</label></td><td><input type="tel" class="form-control col-md-11" name="tel" id="tel" placeholder="Ingrese un Telefono" required pattern="[0-9]{9,10}"></td>
                      </tr> 
                      <tr class="espacio"> 
                        <td align="right"> <label for="email">Email:</label></td><td><input type="email" class="form-control col-md-11" name="email" id="email"placeholder="Ingrese un email" required></td>
                      </tr>                    
                      <tr class="espacio"> 
                        <td align="right"> <label for="fecha_nac">Fecha de nacimiento:</label></td><td><input type="Date" class="form-control col-md-11" name="fecha_nac" id="fecha_nac" placeholder="Ingrese tu fecha_nac" required></td>
                      </tr>                              
                      <tr class="espacio"> 
                        <td align="right"> <label for="sexo">Sexo:</label></td><td>
                          <label>
                          <input type="radio" name="sexo" style="margin-left:20px"; value="Hombre"> Hombre
                          </label>
                          <label>
                          <input type="radio" name="sexo" style="margin-left:20px"; value="Mujer"> Mujer
                          </label>
                        </td>
                      </tr>             
                      <tr>
                        <td align="center" colspan="2"><input type="submit"  class="btn_2" value="Registrar"  title="Registrar" name="registrar"></td>
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