
<?php

require_once 'conexion.php';

class Login{
	public function __construct($user,$contrasenia){
		$this->user=$user;
		$this->contrasenia=$contrasenia;
	}

	public function validar(){
		$con= new Conexion();
		$sql="select nombre_completo from empleados where pass='$this->contrasenia' and usuario='$this->user'";
		$res=$con->consultaRetorno($sql);

		while($fila=mysqli_fetch_assoc($res)){
			@session_start();
			$_SESSION['nombre_completo']=$fila['nombre_completo'];
			$_SESSION['user']=$this->user;
			$_SESSION['pass']=$this->contrasenia;
			$_SESSION['validada']="SI";
		}
	}	
}