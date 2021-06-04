<?php

$controlador = new controladorClientes();

if(isset($_GET['id_cliente'])){
	$row =$controlador->consultar($_GET['id_cliente']);

}else{
	echo "<script>window.location='?cargar=consultarClientes'</script>";
}

$controlador->eliminar($_GET['id_cliente']);
echo "<script>window.location='?cargar=consultarClientes'</script>";

?>