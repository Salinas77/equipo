<?php

$productos=new Productos();
if(isset($_POST)){
	$buscar=@$_POST['buscar'];
	$resultado=$productos->filtrar($buscar);
}else{
	$resultado=$productos->listar();
}

?>
<section style="background-image:url(img/resfondo.jpg);padding-bottom: 30px;">
	<div class="container" style="margin-left:12px; padding-top: 120px; padding-bottom: 30px">
		<form action="" method="POST">
			<nav arial-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?cargar=consultarProductos">Productos</a></li>
                        <li class="breadcrumb-item active"><a href="?cargar=registrarProductos">Registrar</a></li>
                        </ol>
                        </nav>      
			<div><label style="color:black">Nombre del producto</label></div>
			<input type="search" name="buscar" value="<?php echo $buscar ?>" class="form-control col-md-5" placeholder="Buscar"  style="display: inline-block;">
			<a href="" class="offset-md-4" onclick="window.open('reportes/reporteProductos.php')"><img src="img/pdf.png" title="Click para Generar PDF" style="max-width: 5%;"></a>
		</form>
	</div>

    <table class='table table-bordered table-dark' style="text-align: center; line-height: normal;">
        <thead>
                                                              
            <th class='success'>Id producto</th> 
            <th class='success'>Nombre</th>
            <th class='success'>Existencia</th>
            <th class='success'>Precio compra</th>
            <th class='success'>Precio venta</th>
            <th class='success'>Categoría</th>
            <th class='success'>Editar</th>
            <th class='success'>Eliminar</th>                            	               
        </thead>
       	<tbody>
			<?php while($row=mysqli_fetch_assoc($resultado)): ?>
				<tr>
					<td><?php echo $row['id_producto'];?></td>
					<td><?php echo $row['nombre'];?></td>
					<td><?php echo $row['existencia'];?></td>
					<td><?php echo $row['precio_com'];?></td>
					<td><?php echo $row['precio_ven'];?></td>
					<td><?php echo $row['categoria'];?></td>
					
					<td><a href=?cargar=editarProductos&id_producto=<?php echo $row['id_producto'];?>><img src='img/editar.png' title="Click para editar"></a></td>
					<td><a onclick='confirmar(<?php echo $row['id_producto'];?>)'style="cursor: pointer; "><img src='img/eliminar.png' title="Click para eliminar"></a></td>
				</tr>
			<?php endwhile; ?>
		</tbody>                            
    </table>


	<script scr="js/jquery.js"></script>

	<script languaje="javascript">
		function confirmar(id_producto){
			confirmar=confirm("Realmente deseeas eliminar el registro?");

			if(confirmar){
				window.location.href='?cargar=eliminarProductos&id_producto='+id_producto;
				alert('Registro eliminado...');
			}else{
				document.location='?cargar=consultarProductos';
			}
		}
	</script>
</section>