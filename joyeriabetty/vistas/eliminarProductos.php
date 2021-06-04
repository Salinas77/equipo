<?php

$controlador = new controladorProductos();

if(isset($_GET['id_producto'])){
	$row =$controlador->consultar($_GET['id_producto']);

}else{
	echo "<script>window.location='?cargar=consultarProductos'</script>";
}

$controlador->eliminar($_GET['id_producto']);
echo "<script>window.location='?cargar=consultarProductos'</script>";

?>