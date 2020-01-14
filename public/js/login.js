$(document).ready(function(){

	$(document).on('click','#btnIniciar', function()
	{
		$.ajax({
			url: '../src/controllers/loginCtr.php',
			type: 'POST',
			dataType: 'json',
			data: $('#frmLogin').serialize(),
		})
		.done(function(json) {
			if (json.estado == true) {
				alert("Bienvenido "+json.array.usuNom+" "+json.array.usuApe);
				location.reload();
				console.log("success");
			}
			else if(json.estado == false){
				alert("Usuario o contraseña incorrecta");
			}
		})
		.fail(function(json) {
			console.log(json);
		})
	})
});
