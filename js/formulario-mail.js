var formulario = document.getElementById('formulario-mail');
var inputs = document.querySelectorAll('#formulario-mail input');


const expresiones = {
	
	/*password:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/, // 8 a 15 digitos.*/
	correo_cte: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/
	
}

const campos = {
	
	/*password: false,*/
	correo_cte: false,
	
}
/*
const validarFormulario = (e) => {
	switch (e.target.name) {
			case "password":
			validarPassword2();
			validarCampo(expresiones.password, e.target, 'password');
			validarPassword2();
			break;
			case "password2":
				validarPassword2();
			break;
			case "correo":
				validarCorreo2();
				validarCampo(expresiones.correo, e.target, 'correo');
				validarCorreo2();
			break;
			case "correo_confirmacion":
				validarCorreo2();
			break;
		default:
       
		
	}
}
*/
const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}
/*
const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}
*/
const validarCorreo2 = () => {
	const inputCorreo1 = document.getElementById('correo');
	const inputCorreo2 = document.getElementById('correo_confirmacion');

	if(inputCorreo1.value !== inputCorreo2.value){
		document.getElementById(`grupo__correo_confirmacion`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__correo_confirmacion`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__correo_confirmacion i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__correo_confirmacion i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__correo_confirmacion .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['correo'] = false;
	} else {
		document.getElementById(`grupo__correo_confirmacion`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__correo_confirmacion`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__correo_confirmacion i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__correo_confirmacion i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__correo_confirmacion .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['correo'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', (e) => {
	

	const buro = document.getElementById('buro');
	const privacidad = document.getElementById('privacidad');
//	  var response = grecaptcha.getResponse();
	//  var token = response.length;
//          alert (token);
	//  if(token == 0){
	//	document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	//   }
				
		if(/*campos.password && */campos.correo && privacidad.checked && buro.checked /*&& token */> 0){
			
			document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
			setTimeout(() => {
				document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
			}, 5000);
	
			document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
				icono.classList.remove('formulario__grupo-correcto');
			});
		} else {
			document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
			e.preventDefault();
		}
});
