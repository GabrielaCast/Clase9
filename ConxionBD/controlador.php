<?php
	include_once('estudiante.php');
	class controladorEstudiante
	{
		private $estudiante;
		public function __construct()
		{
			$this->estudiante=new estudiante();
		}
	

		public function index()
		{
			$resultado=$this->estudiante->listarTodo();
			return $resultado;
		}

		public function crear($cedula,$nombre,$apellido,$telefono,$edad,$nota1,$nota2,$nota3)
		{
			$promedio=($nota1+$nota2+$nota3)/3;

			//set para los atributos del estudiante
			$this->estudiante->set("cedula",$cedula);
			$this->estudiante->set("nombre",$nombre);
			$this->estudiante->set("apellido",$apellido);
			$this->estudiante->set("telefono",$telefono);
			$this->estudiante->set("edad",$edad);
			$this->estudiante->set("promedio",$promedio);

			$resultado=$this->estudiante->crear();
			return $resultado;
		}

		public function eliminar($id)
		{
			$this->estudiante->set("id",$id);
			$this->estudiante->eliminar();
		}

		public function ver($id)
		{
			$this->estudiante->set("id",$id);
			$this->estudiante->ver();
		}

		public function editar($id)
		{
			$this->estudiante->set("id",$id);
			$this->estudiante->ver();
			$this->estudiante->editar();
		}
	}
?>