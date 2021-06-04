<?php
class enrutador{
	public function cargarVista($vista){
		if(@$_SESSION['validada']=="SI"){

		switch($vista){
			case "registrarEmpleados":
				include_once('vistas/'.$vista.'.php');
				break;

			case "editarEmpleados":
				include_once('vistas/'.$vista.'.php');
				break;

			case "consultarEmpleados":
				include_once('vistas/'.$vista.'.php');
				break;	

			case "eliminarEmpleados":
				include_once('vistas/'.$vista.'.php');
				break;

			case "registrarClientes":
				include_once('vistas/'.$vista.'.php');
				break;

			case "editarClientes":
				include_once('vistas/'.$vista.'.php');
				break;

			case "consultarClientes":
				include_once('vistas/'.$vista.'.php');
				break;	

			case "eliminarClientes":
				include_once('vistas/'.$vista.'.php');
				break;

			case "registrarProductos":
				include_once('vistas/'.$vista.'.php');
				break;

			case "editarProductos":
				include_once('vistas/'.$vista.'.php');
				break;

			case "consultarProductos":
				include_once('vistas/'.$vista.'.php');
				break;	

			case "eliminarProductos":
				include_once('vistas/'.$vista.'.php');
				break;			

			case "cerrar":
					session_destroy();
					echo "<script>window.location='index.php'</script>";
					break;	
		}
		
			}else{
				include_once('vistas/login.php');
		}	
	}

	public function validarGet($variable){
		if(isset($variable)){
			return true;
		}else{
			if(@$_SESSION['validada']=="SI")
				include_once('vistas/inicio.php');
			else
				include_once('vistas/login.php');
		}
	}
}
?>