<?php
include_once('conexion.php');

class Empleado{


	//atributos

	private $id_empleado;
	private $nombre_completo;
	private $tel;
	private $email;
	private $fecha_nac;
	private $usuario;
	private $pass;
	private $ciudad;
	private $sexo;
	private $c_bancaria;
	private $sueldo;

	private $con;


	//metodos

	public function __construct(){
		$this->con = new conexion();
	}

	public function set($atributo, $contenido){
		$this->$atributo = $contenido;
	}

	public function get($atributo){
		return $this->$atributo;
	}

	public function listar(){
		$sql="SELECT *FROM empleados";
		$resultado=$this->con->consultaRetorno($sql);
		return $resultado;
	}

	public function crear(){
		$sql="INSERT INTO empleados (nombre_completo,tel,email,fecha_nac,usuario,pass,ciudad,sexo,c_bancaria,sueldo)
		VALUES ('{$this->nombre_completo}','{$this->tel}','{$this->email}','{$this->fecha_nac}','{$this->usuario}','{$this->pass}','{$this->ciudad}','{$this->sexo}','{$this->c_bancaria}','{$this->sueldo}')";

		$this->con->consultaSimple($sql);
		return true;
	}

	public function eliminar(){
		$sql="DELETE FROM empleados WHERE id_empleado='{$this->id_empleado}'";
		$resultado=$this->con->consultaSimple($sql);
	}

	public function consultar(){
		$sql="SELECT *FROM empleados where id_empleado='{$this->id_empleado}'";
		$resultado=$this->con->consultaRetorno($sql);
		$row=mysqli_fetch_assoc($resultado);

		//set
		$this->id_empleado=$row['id_empleado'];
		$this->nombre_completo=$row['nombre_completo'];
		$this->tel=$row['tel'];
		$this->email=$row['email'];
		$this->fecha_nac=$row['fecha_nac'];
		$this->usuario=$row['usuario'];
		$this->pass=$row['pass'];
		$this->ciudad=$row['ciudad'];
		$this->sexo=$row['sexo'];
		$this->c_bancaria=$row['c_bancaria'];
		$this->sueldo=$row['sueldo'];
		return $row;
	}

	public function editar(){
		$sql="UPDATE empleados SET nombre_completo='{$this->nombre_completo}',tel='{$this->tel}',
		email='{$this->email}',fecha_nac='{$this->fecha_nac}',usuario='{$this->usuario}',pass='{$this->pass}',ciudad='{$this->ciudad}',sexo='{$this->sexo}',c_bancaria='{$this->c_bancaria}',sueldo='{$this->sueldo}'
		WHERE id_empleado='{$this->id_empleado}'";
		$this->con->consultaSimple($sql);
		return true;
	}

	public function filtrar($valor){
		$sql="SELECT *FROM empleados WHERE nombre_completo like '$valor%'";
		$resultado=$this->con->consultaRetorno($sql);
		return $resultado;
	}
}
?>