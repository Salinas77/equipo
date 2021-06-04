<?php
include_once('clases/Productos.php');

class controladorProductos{

	//atributos

	private $productos;


	//metodos

	public function __construct(){
		$this->productos=new Productos();
	}

	public function index(){
		$resultado=$this->productos->listar();
		return $resultado;
	}

	public function crear($nombre,$existencia,$precio_com,$precio_ven,$categoria){
		$this->productos->set("nombre",$nombre);
		$this->productos->set("existencia",$existencia);
		$this->productos->set("precio_com",$precio_com);
		$this->productos->set("precio_ven",$precio_ven);
		$this->productos->set("categoria",$categoria);
		
		$resultado=$this->productos->crear();
		return $resultado;
	}

	public function eliminar($id_producto){
		$this->productos->set("id_producto",$id_producto);
		$this->productos->eliminar();
	}

	public function consultar($id_producto){
		$this->productos->set("id_producto",$id_producto);
		$datos=$this->productos->consultar();
		return $datos;
	}

	public function editar($id_producto,$nombre,$existencia,$precio_com,$precio_ven,$categoria){
		$this->productos->set("id_producto",$id_producto);
		$this->productos->set("nombre",$nombre);
		$this->productos->set("existencia",$existencia);
		$this->productos->set("precio_com",$precio_com);
		$this->productos->set("precio_ven",$precio_ven);
		$this->productos->set("categoria",$categoria);
		
		//_
		$resultado= $this->productos->editar();
		return $resultado;
	}
}
?>