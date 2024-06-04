var formulario = document.getElementById('formulario-familiar');
var inputs = document.querySelectorAll('#formulario-familiar input');

formulario.addEventListener('submit', (e) => {
	
	var motivo = document.getElementById ('motivo').value;
	var estado_civil = document.getElementById ('estado_civil').value;
		
	if(estado_civil ==="null" || motivo ==="null"){		
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
		e.preventDefault();	

	} else {
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
		
	}   
});