jQuery(document).ready(function() {
	//loadUser();
	$('header').load('../../src/views/admin/header.php');
	$('#contenedor').load('../../src/views/admin/container.php');
});
function loadRol(){
	$.ajax({
		url: '',
		type: 'POST',
		dataType: 'JSON',
		data: null,
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})	
}
/*function loadUser(){
	$.ajax({
		url: '../../src/controller/usuarioCtr.php',
		type: 'POST',
		dataType: 'JSON',
		data: {param: "readUser"},
	})
	.done(function(json) {
		var tabla = "";
		$.each(json.datos, function(i, fila) {
				tabla += "<tr>";
				tabla += "<td>"+fila.idUsuario+"</th>";
				tabla += "<td>"+fila.usuCode+"</td>";
				tabla += "<td>"+fila.usuMail+"</td>";
				tabla += "<td>"+fila.usuName+"</td>";
				tabla += "<td>"+fila.usuLastName+"</td>";
				tabla += "<td><button id='edit' class='btn btn-success'>Edit</button><button id='delete' class='btn btn-danger'>Delete</button></td>";
				tabla += "</tr>";
		});
		$('#read').html(tabla);
		console.log(json);
	})
	.fail(function(json) {
		console.log(json);
	})	
}*/
	