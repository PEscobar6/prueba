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

	public function createSesion($usu, $pas)
	{
		//$resultado = null;
		try {
			$consulta = "SELECT * FROM usuariorol INNER JOIN usuario INNER JOIN rol	
			ON usuariorol.idUsuario = usuario.idUsuario AND usuariorol.idRol = rol.idRol
			WHERE usuUsu = ? AND usuPas = ?";

			$resultado = $this->co->prepare($consulta);
			$resultado->bindParam(1, $usu);
			$resultado->bindParam(2, $pas);
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