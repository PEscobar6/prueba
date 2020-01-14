<?php

class loginM
{
	private $co;
	private $retorno;

	function __construct()
	{
		
		$this->co = Conexion::singleton();
		$this->retorno = new stdClass();
	}

	public function createRol($rolName)
	{
		//$resultado = null;
		try {
			$consulta = "INSERT INTO `rol` (`idRol`, `rolNom`, `rolDes`, `estado`)
						VALUES (NULL, ?, NULL, 'A')";

			$resultado = $this->co->prepare($consulta);
			$resultado->bindParam(1, $rolName);
			$resultado->execute();

			//echo $resultado;
			if($resultado->rowCount() > 0){
				$this->retorno->estado = true;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Inicio exitoso";
			}else{
				$this->retorno->estado = false ;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Error";
			}
			

		} catch (PDOException $e) {
			$this->retorno->estado = false;
			$this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}

	public function readRol(){
		try {
			$consulta = "SELECT * FROM Rol";

			$resultado = $this->co->prepare($consulta);
			$resultado->execute();

			//echo $resultado;
			if($resultado->rowCount() > 0){
				$this->retorno->estado = true;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Inicio exitoso";
			}else{
				$this->retorno->estado = false ;
				$this->retorno->datos = $resultado;
				$this->retorno->mensaje = "Error";
			}
			

		} catch (PDOException $e) {
			$this->retorno->estado = false;
			$this->retorno->datos = null;
			$this->retorno->mensaje = "Error: " .$e->getMessage();
		}
		return $this->retorno;
	}
}
?>