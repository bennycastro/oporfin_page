var formulario = document.getElementById('formulario-educacion-trabajo');
var inputs = document.querySelectorAll('#formulario-educacion-trabajo input');


const expresiones = {
	//calle: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	
	nombre_empresa: /^[a-zA-ZÀ-ÿ\s\d]{1,100}$/ // Letras numeros y espacios, pueden llevar acentos.
	
   
}

const campos = {
	
	nombre_empresa: false
	
	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "empresa":
			validarCampo(expresiones.nombre_empresa, e.target, 'empresa');
		break;
		
		default:

	}
}

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


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', (e) => {
	
var estudios = document.getElementById ('estudios').value;
var situacion = document.getElementById ('sit_laboral').value;

if(situacion ==="null" || estudios ==="null"){

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


function ShowSelected()
{
 var cod = document.getElementById("sit_laboral").value;

 
 if(cod =="null"){
    document.getElementById("grupo__empresa").style.display = 'none';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="TIIN"){
    document.getElementById("grupo__empresa").style.display = 'block';
    document.getElementById("grupo__antiguedad").style.display = 'block';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="COTE"){
    document.getElementById("grupo__empresa").style.display = 'block';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="NEPR"){
    document.getElementById("grupo__empresa").style.display = 'block';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'block'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="JUBI"){
    document.getElementById("grupo__empresa").style.display = 'none';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'block';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="ESTU"){
    document.getElementById("grupo__empresa").style.display = 'none';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'block';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="DESE"){
    document.getElementById("grupo__empresa").style.display = 'none';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="TRIF"){
    document.getElementById("grupo__empresa").style.display = 'none';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'block'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
if(cod =="AMCA"){
    document.getElementById("grupo__empresa").style.display = 'none';
    document.getElementById("grupo__antiguedad").style.display = 'none';
    document.getElementById("grupo__industria").style.display = 'none'
    document.getElementById("grupo__pensionado").style.display = 'none';
    document.getElementById("grupo__institución").style.display = 'none';
    document.getElementById("grupo__otra_institucion").style.display = 'none';
   
   
}
}