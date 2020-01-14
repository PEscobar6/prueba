<?php 
session_start();
	if(isset($_SESSION['idRol'])){
	  if ($_SESSION['idRol'] == 1) {
	    header('Location: views/home.php');
	  } else {
	    header('Location: vista/homeCli.php');
	  }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MercaTodo</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../public/css/login.css">
</head>
<body>
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<form id="frmLogin">
				<input type="text" id="user" class="fadeIn second" name="user" placeholder="@User">
				<input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
				<input type="button" class="fadeIn fourth" value="Log In" id="btnIniciar">
			</form>
			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="../public/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../public/js/login.js?v=1"></script>
</body>
</html>