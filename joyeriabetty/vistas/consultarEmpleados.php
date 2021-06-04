<?php

$empleado = new Empleado();
if(isset($_POST)){
	$buscar=@$_POST['buscar'];
	$resultado=$empleado->filtrar($buscar);
}else{
	$resultado=$empleado->listar();
}

?>

<section style="background-image:url(img/resfondo.jpg);padding-bottom: 30px;">
	<div class="container" style="margin-left:12px; padding-top: 120px; padding-bottom: 30px">          
		<form action="" method="POST">
			<nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarEmpleados">Empleados</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarEmpleados">Registrar</a></li>
                        </ol>
                        </nav>      
			<div><label style="color:black">Nombre del empleado</label></div>
			<input type="search" name="buscar" value="<?php echo $buscar ?>" class="form-control col-md-5" placeholder="Buscar"  style="display: inline-block;">
			<a href="" class="offset-md-4" onclick="window.open('reportes/reporteEmpleado.php')"><img src="img/pdf.png" title="Click para Generar PDF" style="max-width: 5%;"></a>
		</form>
	</div>

    <table class='table table-bordered table-dark' style="text-align: center; line-height: normal;">
        <thead>
                                                              
            <th class='success'>Id empleado</th> 
            <th class='success'>Nombre completo</th>
            <th class='success'>Teléfono</th>
            <th class='success'>Email</th>
            <th class='success'>Fecha nacimiento</th>
            <th class='success'>Usuario</th>
            <th class='success'>Password</th>
            <th class='success'>Ciudad</th>
            <th class='success'>Sexo</th>
            <th class='success'>Cuenta bancaria</th>
            <th class='success'>Sueldo</th>
            <th class='success'>Editar</th>
            <th class='success'>Eliminar</th>                            	               
        </thead>
    	<tbody>
			<?php while($row=mysqli_fetch_assoc($resultado)): ?>
				<tr>
					<td><?php echo $row['id_empleado'];?></td>
					<td><?php echo $row['nombre_completo'];?></td>
					<td><?php echo $row['tel'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['fecha_nac'];?></td>
					<td><?php echo $row['usuario'];?></td>
					<td><?php echo $row['pass'];?></td>
					<td><?php echo $row['ciudad'];?></td>
					<td><?php echo $row['sexo'];?></td>
					<td><?php echo $row['c_bancaria'];?></td>
					<td><?php echo $row['sueldo'];?></td>

					<td><a href=?cargar=editarEmpleados&id_empleado=<?php echo $row['id_empleado'];?>><img src='img/editar.png' title="Click para editar"></a></td>
					<td><a onclick='confirmar(<?php echo $row['id_empleado'];?>)'style="cursor: pointer;"><img src='img/eliminar.png' title="Click para eliminar"></a></td>
				</tr>
			<?php endwhile; ?>
		</tbody>                      
    </table>

<script scr="js/jquery.js"></script>

<script languaje="javascript">
	function confirmar(id_empleado){
		confirmar=confirm("Realmente deseeas eliminar el registro?");

			if(confirmar){
				window.location.href='?cargar=eliminarEmpleados&id_empleado='+id_empleado;
				alert('Registro eliminado...');
			}else{
				window.location.href='?cargar=consultarEmpleados';
			}
		}
	</script>
</section>