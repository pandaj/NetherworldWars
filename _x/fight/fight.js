//Inicia Turno
var activaTodo = true;
var turno = 0;
function clickTurno() {
	if (activaTodo) {
		activaTodo = false;
		turno++;
		$('#fight-indica').html('Elige Personaje');
		$('#fight-turno').fadeOut(500);
		setTimeout(function() {
			activaTodo = true;
		}, 500);
	}
}


//Cambia Turno
function cambiaTurno() {
	if (indicaTurno == 'jugador') {
		indicaTurno = 'enemigo';
		$('#fight-turno p').html('JUGADOR 2<br><br>HAZ CLICK PARA COMENZAR');
	}
	else {
		indicaTurno = 'jugador';
		$('#fight-turno p').html('JUGADOR 1<br><br>HAZ CLICK PARA COMENZAR');
	}
	$('#fight-turno').fadeIn(500);
	setTimeout(function() {
		activaTodo = true;
	}, 500);
}


//Posiciones
var posiciones = new Array();
var num = 0;
for (var p = 0; p < 9; p++) {
	posiciones[p] = new Array(
		num+1, num+2, num+3, num+4, num+5, num+6, num+7, num+8, num+9
	);
	num = num+9;
}


/*----- Detecta Posiciones -----*/
var totalPos = 81;
function resetPos() {
	for (var pp = 1; pp <= totalPos; pp++) {
		$('#ficha'+ pp +' .over').removeClass('rojo');
	}
}


//Animaciones
function animacion(num) {
	var tipo = $('#ficha'+ num).attr('data-type');
	var velo = 200 + (num*3);
	if (tipo == 'jugador' || tipo == 'enemigo') {
		$('#ficha'+ num + ' .foto').animate({height:'36px','margin-top':'4px'},velo).animate({height:'40px','margin-top':0},velo, function(){
			animacion(num);
		});
	} else {
		setTimeout(function() {
			animacion(num);
		}, (velo*2));
	}
}
for (var a = 1; a <= totalPos; a++) {
	animacion(a);
}


/*----- Muestra Posiciones -----*/
function muestraPos(elNum, elTipo, rango) {
	for (var p1 = 0; p1 < posiciones.length; p1++) {
		for (var p2 = 0; p2 < posiciones[p1].length; p2++) {
			var num = posiciones[p1][p2];
			var tipo = $('#ficha'+ num).attr('data-type');
			
			if (num == elNum) {
				for (var r = 1; r <= rango; r++) {
					//Atras
					if (p2 > (r-1) ) {
						var num1 = posiciones[p1][(p2-r)];
						var tipo1 = $('#ficha'+ num1).attr('data-type');
						if (elTipo.indexOf(tipo1) >= '0') {
							$('#ficha'+ num1 +' .over').addClass('rojo');
						}
						if (elTipo.length > 1) if (elTipo[1] == tipo1) {
							$('#ficha'+ num1 +' .box').fadeIn(300);
						}
					}
					//Adelante
					if (p2 < (posiciones[p1].length - r) ) {
						var num2 = posiciones[p1][(p2+r)];
						var tipo2 = $('#ficha'+ num2).attr('data-type');
						if (elTipo.indexOf(tipo2) >= '0') {
							$('#ficha'+ num2 +' .over').addClass('rojo');
						}
						if (elTipo.length > 1) if (elTipo[1] == tipo2) {
							$('#ficha'+ num2 +' .box').fadeIn(300);
						}
					}
					//Arriba
					if (p1 > (r-1) ) {
						var num3 = posiciones[(p1-r)][p2];
						var tipo3 = $('#ficha'+ num3).attr('data-type');
						if (elTipo.indexOf(tipo3) >= '0') {
							$('#ficha'+ num3 +' .over').addClass('rojo');
						}
						if (elTipo.length > 1) if (elTipo[1] == tipo3) {
							$('#ficha'+ num3 +' .box').fadeIn(300);
						}
					}
					//Abajo
					if (p1 < (posiciones.length - r) ) {
						var num4 = posiciones[(p1+r)][p2];
						var tipo4 = $('#ficha'+ num4).attr('data-type');
						if (elTipo.indexOf(tipo4) >= '0') {
							$('#ficha'+ num4 +' .over').addClass('rojo');
						}
						if (elTipo.length > 1) if (elTipo[1] == tipo4) {
							$('#ficha'+ num4 +' .box').fadeIn(300);
						}
					}
					
					/*----- Diagonales -----*/
					if (rango > 1) {
						for (var d = 1; d <= (rango-r); d++) {
							//Atras-Arriba
							if (p2 > (r-1) && p1 > (d-1)) {
								var numA = posiciones[p1-d][(p2-r)];
								var tipoA = $('#ficha'+ numA).attr('data-type');
								if (elTipo.indexOf(tipoA) >= '0') {
									$('#ficha'+ numA +' .over').addClass('rojo');
								}
								if (elTipo.length > 1) if (elTipo[1] == tipoA) {
									$('#ficha'+ numA +' .box').fadeIn(300);
								}
							}
							//Atras-Abajo
							if (p2 > (r-1) && p1 < (posiciones.length - d)) {
								var numB = posiciones[p1+d][p2-r];
								var tipoB = $('#ficha'+ numB).attr('data-type');
								if (elTipo.indexOf(tipoB) >= '0') {
									$('#ficha'+ numB +' .over').addClass('rojo');
								}
								if (elTipo.length > 1) if (elTipo[1] == tipoB) {
									$('#ficha'+ numB +' .box').fadeIn(300);
								}
							}
							//Adelante-Arriba
							if (p2 < (posiciones[p1].length - r) && p1 > (d-1)) {
								var numC = posiciones[p1-d][p2+r];
								var tipoC = $('#ficha'+ numC).attr('data-type');
								if (elTipo.indexOf(tipoC) >= '0') {
									$('#ficha'+ numC +' .over').addClass('rojo');
								}
								if (elTipo.length > 1) if (elTipo[1] == tipoC) {
									$('#ficha'+ numC +' .box').fadeIn(300);
								}
							}
							//Adelante-Abajo
							if (p2 < (posiciones[p1].length - r) && p1 < (posiciones.length - d) ) {
								var numD = posiciones[p1+d][p2+r];
								var tipoD = $('#ficha'+ numD).attr('data-type');
								if (elTipo.indexOf(tipoD) >= '0') {
									$('#ficha'+ numD +' .over').addClass('rojo');
								}
								if (elTipo.length > 1) if (elTipo[1] == tipoD) {
									$('#ficha'+ numD +' .box').fadeIn(300);
								}
							}
						}
					}
				}
			}
		}
	}
}


//Click Character
var character = 0;
var activaMueve = false;
var indicaTurno = "jugador";
function clickChar(num) {
	var tipo = $('#ficha'+ num).attr('data-type');
	
	if (activaTodo) {
		
		if (activaMueve && num == character && !activaRango) {
			$('.fichas .box').hide();
			resetPos();
			activaTodo = true;
			activaMueve = false;
			eligeRango(num);
		}
		
		//Elige Personaje
		if (tipo == indicaTurno && !activaRango) {
			$('.fichas .box').hide();
			activaTodo = false;
			$('#ficha'+ num +' .box').fadeIn(300);
			$('#fight-indica').html('Elige Posicion');
			resetPos();
			var idChar = $('#ficha'+ num).attr('data-id');
			var speed = characters[idChar].spd;
			var rango = speed/10;
			character = num;
			muestraPos(num, Array('0'), rango);
			setTimeout(function() {
				activaTodo = true;
				activaMueve = true;
			}, 300);
		}
		
		//Ataca Enemigo
		if (tipo != indicaTurno && activaRango && $('#ficha'+ num +' .over').hasClass("rojo")) {
			activaTodo = false;
			$('.fichas .box').hide();
			var idChar = $('#ficha'+ character).attr('data-id');
			var damage = characters[idChar].atk;

			$('#ficha'+ num).animate({opacity:0}, 300, function(){
				//alert(damage);
				var vida = $('#ficha'+ num +' .box-vid').html();
				vida = vida-damage;
				$('#ficha'+ num +' .box-vid').html(vida);
				
				//enemigo muere
				if (vida <= 0) {
					vida = 0;
					$('#ficha'+ num).attr('data-type', 0);
					$('#ficha'+ num).attr('data-id', 0);
					$('#ficha'+ num).attr('href', 'javascript:clickVacio('+ num +');');
					$('#ficha'+ num).css('background-image', 'none');
					$('#ficha'+ num).removeClass(tipo);
					$('#ficha'+ num +' .box').html('');
				}
				
			}).animate({opacity:1}, 300, function() {
				resetPos();
				activaRango = false;
				cambiaTurno();
			});
		}
	}
}


//Click Vacio
function clickVacio(num) {
	if ( $('#ficha'+ num +' .over').hasClass("rojo") && character > 0 && activaTodo) {
		activaTodo = false;
		
		//Movimiento
		if (!activaRango) {
			$('#ficha'+ num).animate({opacity:0}, 300);
			$('#ficha'+ character +' .box').fadeOut(300);
			$('#ficha'+ character).animate({opacity:0}, 300, function() {
				var tipo = $('#ficha'+ character).attr('data-type');
				var data = $('#ficha'+ character).attr('data-id');
				var temp = $('#ficha'+ character).html();
				
				$('#ficha'+ character).attr('data-type', 0);
				$('#ficha'+ character).attr('data-id', 0);
				$('#ficha'+ character).attr('href', 'javascript:clickVacio('+ character +');');
				$('#ficha'+ character).html('<div class="over"></div><div class="box"></div>');
				$('#ficha'+ character).removeClass(indicaTurno);
				$('#ficha'+ character).animate({opacity:1}, 300);
				
				resetPos();
				
				$('#ficha'+ num).attr('data-type',tipo);
				$('#ficha'+ num).attr('data-id',data);
				$('#ficha'+ num).attr('href', 'javascript:clickChar('+ num +');');
				$('#ficha'+ num).html(temp);
				$('#ficha'+ num).addClass(indicaTurno);
				$('#ficha'+ num).animate({opacity:1}, 300, function(){
					activaTodo = true;
					activaMueve = false;
					eligeRango(num);
				});
			});
		}
		//Ataque Nulo
		else {
			$('#ficha'+ character +' .box').fadeOut(300);
			$('#ficha'+ num).animate({opacity:0}, 300).animate({opacity:1}, 300, function() {
				resetPos();
				activaRango = false;
				cambiaTurno();
			});
		}
	}
}


/*----- Selector de Rango -----*/
var activaRango = false;

function eligeRango(num) {
	activaRango = true;
	character = num;
	var idChar = $('#ficha'+ num).attr('data-id');
	var acierto = characters[idChar].acc;
	var rango = acierto/10;
	var elTipo = new Array('0','jugador');
	
	if (indicaTurno == 'jugador') {
		elTipo = new Array('0','enemigo');
	}
	
	$('#fight-indica').html('Elige Objetivo de Ataque');
	muestraPos(num, elTipo, rango);
}