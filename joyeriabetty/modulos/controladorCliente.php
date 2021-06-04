<?php
include_once('clases/Clientes.php');

class controladorClientes{

	//atributos

	private $clientes;


	//metodos

	public function __construct(){
		$this->clientes=new Clientes();
	}

	public function index(){
		$resultado=$this->clientes->listar();
		return $resultado;
	}

	public function crear($nombre_completo,$direccion,$tel,$email,$fecha_nac,$sexo){
		$this->clientes->set("nombre_completo",$nombre_completo);
		$this->clientes->set("direccion",$direccion);
		$this->clientes->set("tel",$tel);
		$this->clientes->set("email",$email);
		$this->clientes->set("fecha_nac",$fecha_nac);
		$this->clientes->set("sexo",$sexo);
		
		$resultado=$this->clientes->crear();
		return $resultado;
	}

	public function eliminar($id_cliente){
		$this->clientes->set("id_cliente",$id_cliente);
		$this->clientes->eliminar();
	}

	public function consultar($id_cliente){
		$this->clientes->set("id_cliente",$id_cliente);
		$datos=$this->clientes->consultar();
		return $datos;
	}

	public function editar($id_cliente,$nombre_completo,$direccion,$tel,$email,$fecha_nac,$sexo){
		$this->clientes->set("id_cliente",$id_cliente);
		$this->clientes->set("nombre_completo",$nombre_completo);
		$this->clientes->set("direccion",$direccion);
		$this->clientes->set("tel",$tel);
		$this->clientes->set("email",$email);
		$this->clientes->set("fecha_nac",$fecha_nac);
		$this->clientes->set("sexo",$sexo);
	
		//_
		$resultado= $this->clientes->editar();
		return $resultado;
	}
}
?>