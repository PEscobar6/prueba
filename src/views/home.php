<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MercaTodo :: Admin</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/login.css">
</head>
<body>
	<header></header>
	<div id="contenedor"></div>


	<!-- Add Modal  -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header bg-dark text-light">
			    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
			    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			  </div>
			  <div class="modal-body">
			  	<div class="container">
			  		<div class="row">
			  			<div class="col-sm-12">
			  				<div class="form-group">
			  					<label for="usuUsu">Usuario</label>
			  					<input type="text" id="usuUsu" name="usuUsu" class="form-control" placeholder="Email"></input>
			  				</div>
			  				<div class="form-group">
			  					<label for="usuPass">Password</label>
			  					<input type="text" id="usuPass" name="usuPass" class="form-control" placeholder="Name(s)"></input>
			  				</div>
			  				<div class="form-group">
			  					<label for="usuNom">Names</label>
			  					<input type="text" id="usuNom" name="usuNom" class="form-control" placeholder="Last Name"></input>
			  				</div>
			  				<div class="form-group">
			  					<label for="usuApe">Last Name</label>
			  					<input type="text" id="usuApe" name="usuApe" class="form-control" placeholder="Last Name"></input>
			  				</div>
			  				<div class="form-group">
			  					<label for="usuApe">Rol</label>
			  					<select id="rol">
			  						<!-- Se cargan automaticamente -->
			  					</select>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			    <button type="button" class="btn btn-primary" id="saveUser">Save changes</button>
			  </div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../../public/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../../public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../public/js/index.js"></script>
</body>
</html>