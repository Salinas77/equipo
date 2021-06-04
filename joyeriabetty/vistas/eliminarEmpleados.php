<?php

$controlador = new controladorEmpleado();

if(isset($_GET['id_empleado'])){
	$row =$controlador->consultar($_GET['id_empleado']);

}else{
	echo "<script>window.location='?cargar=consultarEmpleados'</script>";
}

$controlador->eliminar($_GET['id_empleado']);
echo "<script>window.location='?cargar=consultarEmpleados'</script>";

?>