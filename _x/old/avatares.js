window.avatar = -1;

function botonAvatar(btn) {
	$("#avatar-" + btn).click(function(){
		if (window.avatar != btn) {
			if (window.avatar != -1) {
				$("#avatar-" + window.avatar).removeClass('elegido');
			}
			$("#avatar-" + btn).addClass('elegido');
			window.avatar = btn;
			img.src = "avatares/" + avatares[btn].slug + "-anima.png";
		}
	});
}


/*----------- DOCUMENT READY -------------------*/


$(document).ready(function(e) {
	for (a = 0; a < avatares.length; a++) {
		var contAvatar = '<li id="avatar-' + a + '"><img src="avatares/' + avatares[a].slug + '-face.png" width="100%" height="100%" /></li>';
		$("#new-elige").append(contAvatar);
		botonAvatar(a);
	}
});


/*------------------  ----------------------*/


var posX = 0; //posicion absoluta en X
var posY = 0; // posicion absoluta en Y
var maxWidth = 180;
var maxHeight = 250;
var width = 1; // ancho de cada sprite
var height = 1; // alto de cada sprite
var indica = 0; // indicador del sprite actual
var tope = 6 - 1; // cantidad total de sprites - 1
var vel = 150; // velocidad de animacion
var animaCirculo; //funcion del intervalo de animacion
		
//Crea el Canvas
var canvas;
var context;
var img = new Image();

$(document).ready(function(e) {
	canvas = document.getElementById("new-personaje");
	context = canvas.getContext("2d");
});

img.onload = function(e) {
	clearInterval(animaCirculo);
	width = this.width / 6;
	height = this.height / 2;
	limpieza();
	dibujaSprite();
	animaCirculo = setInterval(animaC, vel);
}
		
//Borrar Canvas
function limpieza() {
	context.clearRect(0, 0, maxWidth, maxHeight);
}
		
//Dibujar Canvas
function dibujaSprite() {
	posX = Math.ceil( (maxWidth - width) / 2);
	posY = Math.ceil( (maxHeight - height) / 2);
	context.drawImage(img, (width*indica), 0, width, height, posX, posY, width, height);
	var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
	window.context.putImageData(imageData, 0, 0);
}
		
//Ciclo Animacion Canvas
function animaC() {
		if (indica == tope) {
				indica = 0;
		} else {
				indica += 1;
		}
		clearInterval(animaCirculo);
		animaCirculo = setInterval(animaC, vel);
		limpieza();
		dibujaSprite();
}
		
/*
		function girar() {
			clearInterval(animaCirculo);
			
			if (indGiro == 4) {
				indGiro = 1;
			} else {
				indGiro++;
			}
			if (indGiro == 2 || indGiro == 3) {
				width = 81;
				height = 148;
				//borrar excedente abajo
				context.clearRect(posX, posY + height, 82, 153 - height);
				//borrar excedente al lado
				context.clearRect(posX + width, posY, 82 - width, 153);
			} else {
				width = 82;
				height = 153;
			}
			img = new Image();
			img.src = "stand" + indGiro + "-valkyrie.png";
			img.onload = function() {
				limpieza();
				cambiaSprite();
				animaCirculo = setInterval(animaC, vel);
			}
		}
*/
