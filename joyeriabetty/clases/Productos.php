<?php
include_once('conexion.php');

class Productos{


	//atributos

	private $id_producto;
	private $nombre;
	private $existencia;
	private $precio_com;
	private $precio_ven;
	private $categoria;
	


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
		$sql="SELECT *FROM productos";
		$resultado=$this->con->consultaRetorno($sql);
		return $resultado;
	}

	public function crear(){
		$sql="INSERT INTO productos (nombre,existencia,precio_com,precio_ven,categoria)
		VALUES ('{$this->nombre}','{$this->existencia}','{$this->precio_com}','{$this->precio_ven}','{$this->categoria}')";

		$this->con->consultaSimple($sql);
		return true;
	}

	public function eliminar(){
		$sql="DELETE FROM productos WHERE id_producto='{$this->id_producto}'";
		$resultado=$this->con->consultaSimple($sql);
	}

	public function consultar(){
		$sql="SELECT *FROM productos where id_producto='{$this->id_producto}'";
		$resultado=$this->con->consultaRetorno($sql);
		$row=mysqli_fetch_assoc($resultado);

		//set
		$this->id_producto=$row['id_producto'];
		$this->nombre=$row['nombre'];
		$this->existencia=$row['existencia'];
		$this->precio_com=$row['precio_com'];
		$this->precio_ven=$row['precio_ven'];
		$this->categoria=$row['categoria'];
		
		
		return $row;
	}

	public function editar(){
		$sql="UPDATE productos SET nombre='{$this->nombre}',existencia='{$this->existencia}',
		precio_com='{$this->precio_com}',precio_ven='{$this->precio_ven}',categoria='{$this->categoria}'
		WHERE id_producto='{$this->id_producto}'";
		$this->con->consultaSimple($sql);
		return true;
	}

	public function filtrar($valor){
		$sql="SELECT *FROM productos WHERE nombre like '$valor%'";
		$resultado=$this->con->consultaRetorno($sql);
		return $resultado;
	}
}
?>