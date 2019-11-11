/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('materialize-css/dist/js/materialize.min');
require('lightbox2/dist/js/lightbox.min');

//General scripts
$(document).ready(function(){
	$('.sidenav').sidenav();
	$('.dropdown-trigger').dropdown({
		coverTrigger: false,
		hover: true
	});
	$('.slider').slider({
		height: $(window).height(),
		interval: 4000,
		duration: 1000,
		indicators: false
	});
	$('.tabs').tabs();
	$('.collapsible').collapsible();
	$('select').formSelect({
		dropdownOptions:{
			coverTrigger: false
		}
	});
	$('input#excerpt').characterCounter();
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd',
		firstDay: 1,
		showDaysInNextAndPreviousMonths: true,
		i18n: {
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic"],
            weekdays: ["Domingo","Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            weekdaysShort: ["Dom","Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
            weekdaysAbbrev: ["D","L", "M", "M", "J", "V", "S"]
        }
	});
	$('.timepicker').timepicker({
		twelveHour: false,
		format: 'H:i:s',
		i18n: {
			cancel : 'Cancelar',
			clear: 'Limpiar',
			done: 'Ok'
		}
	});
	$('.materialboxed').materialbox();
	$('.carousel').carousel();
});