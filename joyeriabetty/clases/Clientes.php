<?php
include_once('conexion.php');

class Clientes{


	//atributos

	private $id_cliente;
	private $nombre_completo;
	private $direccion;
	private $tel;
	private $email;
	private $fecha_nac;
	private $sexo;


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
		$sql="SELECT *FROM clientes";
		$resultado=$this->con->consultaRetorno($sql);
		return $resultado;
	}

	public function crear(){
		$sql="INSERT INTO clientes (nombre_completo,direccion,tel,email,fecha_nac,sexo)
		VALUES ('{$this->nombre_completo}','{$this->direccion}','{$this->tel}','{$this->email}','{$this->fecha_nac}','{$this->sexo}')";

		$this->con->consultaSimple($sql);
		return true;
	}

	public function eliminar(){
		$sql="DELETE FROM clientes WHERE id_cliente='{$this->id_cliente}'";
		$resultado=$this->con->consultaSimple($sql);
	}

	public function consultar(){
		$sql="SELECT *FROM clientes where id_cliente='{$this->id_cliente}'";
		$resultado=$this->con->consultaRetorno($sql);
		$row=mysqli_fetch_assoc($resultado);

		//set
		$this->id_cliente=$row['id_cliente'];
		$this->nombre_completo=$row['nombre_completo'];
		$this->direccion=$row['direccion'];
		$this->tel=$row['tel'];
		$this->email=$row['email'];
		$this->fecha_nac=$row['fecha_nac'];
		$this->sexo=$row['sexo'];
		
		return $row;
	}

	public function editar(){
		$sql="UPDATE clientes SET nombre_completo='{$this->nombre_completo}',direccion='{$this->direccion}',
		tel='{$this->tel}',email='{$this->email}',fecha_nac='{$this->fecha_nac}',sexo='{$this->sexo}'
		WHERE id_cliente='{$this->id_cliente}'";
		$this->con->consultaSimple($sql);
		return true;
	}

	public function filtrar($valor){
		$sql="SELECT *FROM clientes WHERE nombre_completo like '$valor%'";
		$resultado=$this->con->consultaRetorno($sql);
		return $resultado;
	}
}
?>