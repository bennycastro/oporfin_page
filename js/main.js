(function(){ 
	'use strict';


	document.addEventListener('DOMContentLoaded', function() {
		if (document.getElementById('calcular')) {
			var regalo = document.getElementById('regalo');

			// Campos Datos usuario
			var nombre = document.getElementById('nombre');
			var apellido = document.getElementById('apellido-paterno');
			var email = document.getElementById('apellido-materno');

			// Campos pases
			var pase_dia = document.getElementById('pase_dia');
			var pase_dosdias = document.getElementById('pase_dosdias');
			var pase_completo = document.getElementById('pase_completo');

			// mostrar en editar
		

			//Botones y divs
			var calcular = document.getElementById('calcular');
			var errorDiv = document.getElementById('error');
			var botonRegistro = document.getElementById('btnNombre');
      botonRegistro.disabled = true;
			var lista_productos = document.getElementById('lista-productos');
			var suma = document.getElementById('suma-total');

			// Extras
			var camisas = document.getElementById('camisa_evento');
			var etiquetas = document.getElementById('etiquetas');

			botonRegistro.disabled = true;

			calcular.addEventListener('click', calcularMontos);

			pase_dia.addEventListener('input', mostrarDias);
			pase_dosdias.addEventListener('input', mostrarDias);
			pase_completo.addEventListener('input', mostrarDias);

			nombre.addEventListener('blur', validarCampos);
			apellido.addEventListener('blur', validarCampos);
			email.addEventListener('blur', validarCampos);
			email.addEventListener('blur', validarMail);

			function validarCampos() {
				if (this.value == '') {
					errorDiv.style.display = 'block';
					errorDiv.innerHTML = 'este campo es obligatorio';
					this.style.border = '1px solid red';
					errorDiv.style.border = '1px solid red';
				} else {
					errorDiv.style.display = 'none';
					this.style.border = '1px solid #cccccc';
				}
			}
		}
	});

	$(function() {
		// filtro pagado no pagado

		$('#filtros a').on('click', function() {
			$('#filtros a').removeClass('activo');
			$(this).addClass('activo');
			$('.registrados tbody tr').hide();

			if ($(this).attr('id') == 'pagados') {
				$('.registrados tbody tr.pagado').show();
			} else {
				$('.registrados tbody tr.no_pagado').show();
			}

			return false;
		});

		// Lettering
		$('.nombre-sitio').lettering();

		// Agregar clase a Menú
		$('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
		$('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
		$('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');

		// Menu fijo

		var windowHeight = $(window).height();
		var barraAltura = $('.barra').innerHeight();
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll > windowHeight) {
				$('.barra').addClass('fixed');
				$('body').css({ 'margin-top': barraAltura + 'px' });
			} else {
				$('.barra').removeClass('fixed');
				$('body').css({ 'margin-top': '0px' });
			}
		});

		// Menu Responsive

		$('.menu-movil').on('click', function() {
			$('.navegacion-principal').slideToggle();
		});

		// Reaccionar a Resize en la pantalla
		var breakpoint = 768;
		$(window).resize(function() {
			if ($(document).width() >= breakpoint) {
				$('.navegacion-principal').show();
			} else {
				$('.navegacion-principal').hide();
			}
		});

		// Programa de Conferencias
		$('.programa-evento .info-curso:first').show();
		$('.menu-programa a:first').addClass('activo');

		$('.menu-programa a').on('click', function() {
			$('.menu-programa a').removeClass('activo');
			$(this).addClass('activo');
			$('.ocultar').hide();
			var enlace = $(this).attr('href');
			$(enlace).fadeIn(1000);
			return false;
		});

		// Animaciones para los Numeros
		var resumenLista = jQuery('.resumen-evento');
		if (resumenLista.length > 0) {
			$('.resumen-evento').waypoint(
				function() {
					$('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200);
					$('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1200);
					$('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500);
					$('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500);
				},
				{
					offset: '60%'
				}
			);
		}

		//Cuenta Regresiva

		$('.cuenta-regresiva').countdown('2017/12/10 09:00:00', function(event) {
			$('#dias').html(event.strftime('%D'));
			$('#horas').html(event.strftime('%H'));
			$('#minutos').html(event.strftime('%M'));
			$('#segundos').html(event.strftime('%S'));
		});

		// Colorbox

		$('.invitado-info').colorbox({ inline: true, width: '50%' });
		$('.boton_newsletter').colorbox({ inline: true, width: '50%' });
	});
})();

 