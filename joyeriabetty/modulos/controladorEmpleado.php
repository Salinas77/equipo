<?php
include_once('clases/Empleado.php');

class controladorEmpleado{

	//atributos

	private $empleado;


	//metodos

	public function __construct(){
		$this->empleado=new Empleado();
	}

	public function index(){
		$resultado=$this->empleado->listar();
		return $resultado;
	}

	public function crear($nombre_completo,$tel,$email,$fecha_nac,$usuario,$pass,$ciudad,$sexo,$c_bancaria,$sueldo){
		$this->empleado->set("nombre_completo",$nombre_completo);
		$this->empleado->set("tel",$tel);
		$this->empleado->set("email",$email);
		$this->empleado->set("fecha_nac",$fecha_nac);
		$this->empleado->set("usuario",$usuario);
		$this->empleado->set("pass",$pass);
		$this->empleado->set("ciudad",$ciudad);
		$this->empleado->set("sexo",$sexo);
		$this->empleado->set("c_bancaria",$c_bancaria);
		$this->empleado->set("sueldo",$sueldo);

		$resultado=$this->empleado->crear();
		return $resultado;
	}

	public function eliminar($id_empleado){
		$this->empleado->set("id_empleado",$id_empleado);
		$this->empleado->eliminar();
	}

	public function consultar($id_empleado){
		$this->empleado->set("id_empleado",$id_empleado);
		$datos=$this->empleado->consultar();
		return $datos;
	}

	public function editar($id_empleado,$nombre_completo,$tel,$email,$fecha_nac,$usuario,$pass,$ciudad,$sexo,$c_bancaria,$sueldo){
		$this->empleado->set("id_empleado",$id_empleado);
		$this->empleado->set("nombre_completo",$nombre_completo);
		$this->empleado->set("tel",$tel);
		$this->empleado->set("email",$email);
		$this->empleado->set("fecha_nac",$fecha_nac);
		$this->empleado->set("usuario",$usuario);
		$this->empleado->set("pass",$pass);
		$this->empleado->set("ciudad",$ciudad);
		$this->empleado->set("sexo",$sexo);
		$this->empleado->set("c_bancaria",$c_bancaria);
		$this->empleado->set("sueldo",$sueldo);
		//
		$resultado=$this->empleado->editar();
		return $resultado;
	}
}
?>