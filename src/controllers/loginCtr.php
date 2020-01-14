<?php 
require_once '../models/conexion.php';
require_once '../models/loginMdl.php';

	error_reporting(1);

	$retorno = array('mensaje' => '', 'estado' =>null, 'array' => null);



	$loginM = new loginM();
	$resultado = $loginM->createSesion($_POST['user'], $_POST['password']);
	$retorno["mensaje"] = $resultado->mensaje;
	$retorno["estado"] = $resultado->estado;
	$retorno["array"] = $resultado->datos;

	

	 if($resultado->datos->rowCount()>0){
	 	$retorno["array"] = $resultado->datos->fetch(PDO::FETCH_ASSOC);
	 	session_start();
	 	
	 	$_SESSION['idUsuario'] = $retorno['array']['idUsuario'];
	 	$_SESSION['idRol'] = $retorno['array']['idRol'];
	 	$_SESSION['Usuario'] = $retorno['array']['usuUsu'];
	 	$_SESSION['Rol'] = $retorno['array']['rolNom'];
	 	$_SESSION['Nombres'] = $retorno['array']['usuNom'];
	 	$_SESSION['Apellidos'] = $retorno['array']['usuApe'];

	 }else{
	 	
	 	$retorno['mensaje'] = "Error al iniciar Sesion";
	 }

	 unset($iniciarSesionE);
	 unset($iniciarSesionM);

	//echo $_SESSION['apellidoUnoLogueado'];
	echo json_encode($retorno);
	echo $_SESSION['idUsuario'];
	//echo $_SESSION['nombreUnoLogueado']; 
	//echo $_SESSION['nombreDosLogueado'];	
 ?>