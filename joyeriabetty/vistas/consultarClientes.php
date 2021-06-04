<?php

$clientes=new Clientes();
if(isset($_POST)){
	$buscar=@$_POST['buscar'];
	$resultado=$clientes->filtrar($buscar);
}else{
	$resultado=$clientes->listar();
}

?>
<section style="background-image:url(img/resfondo.jpg);padding-bottom: 30px;">
	<div class="container" style="margin-left:12px; padding-top: 120px; padding-bottom: 30px">
		 <nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarClientes">Clientes</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarClientes">Registrar</a></li>
                        </ol>
                        </nav>                
		<form action="" method="POST">
			<div><label style="color:black">Nombre del cliente</label></div>
			<input type="search" name="buscar" value="<?php echo $buscar ?>" class="form-control col-md-5" placeholder="Buscar"  style="display: inline-block;">
			<a href="" class="offset-md-4" onclick="window.open('reportes/reporteClientes.php')"><img src="img/pdf.png" title="Click para Generar PDF" style="max-width: 5%;"></a>
		</form>
	</div>

   	<table class='table table-bordered table-dark' style="text-align: center; line-height: normal;">
        <thead>
                                                              
            <th class='success'>Id cliente</th> 
            <th class='success'>Nombre completo</th>
            <th class='success'>Direccion</th>
            <th class='success'>Telefono</th>
            <th class='success'>Email</th>
            <th class='success'>Fecha de nacimiento</th>
            <th class='success'>Sexo</th>
            <th class='success'>Editar</th>
            <th class='success'>Eliminar</th>                            	               
        </thead>
        <tbody>
			<?php while($row=mysqli_fetch_assoc($resultado)): ?>
				<tr>
					<td><?php echo $row['id_cliente'];?></td>
					<td><?php echo $row['nombre_completo'];?></td>
					<td><?php echo $row['direccion'];?></td>
					<td><?php echo $row['tel'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['fecha_nac'];?></td>
					<td><?php echo $row['sexo'];?></td>
				

					<td><a href=?cargar=editarClientes&id_cliente=<?php echo $row['id_cliente'];?>><img src='img/editar.png' title="Click para editar"></a></td>
					<td><a onclick='confirmar(<?php echo $row['id_cliente'];?>)'style="cursor: pointer; "><img src='img/eliminar.png' title="Click para eliminar"></a></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
                            
   	</table>

	<script scr="js/jquery.js"></script>

	<script languaje="javascript">
		function confirmar(id_cliente){
			confirmar=confirm("Realmente deseeas eliminar el registro?");

			if(confirmar){
				window.location.href='?cargar=eliminarClientes&id_cliente='+id_cliente;
				alert('Registro eliminado...');
			}else{
				document.location='?cargar=consultarClientes';
			}
		}
	</script>
</section>	