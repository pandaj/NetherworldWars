/*----- Inicial -----*/
$('#select').hide();
$('#select-btn').css({opacity:0.5});
$('#select').fadeIn(500);
var musicFondo = new Howl({
	urls	: ['musicas/A-extreme-outlaw-overlord_high.mp3'],
	buffer	: true,
	volume	: 0.5,
	loop	: true
}).play();


/*----- Cambia Musica On/Off -----*/
var iMusica = true;
function cambiaMusica() {
	if (iMusica) {
		iMusica = false;
		musicFondo.stop();
		$('#btn-musica img').attr('src', 'images/sonido-on.png');
	} else {
		iMusica = true;
		musicFondo.play();
		$('#btn-musica img').attr('src', 'images/sonido-off.png');
	}
}


//Animaciones
function animacion(num) {
	var velo = 400 + (num*3);
	$('#char-'+ num +' .foto').animate({height:'72px','margin-top':'8px'},velo).animate({height:'80px','margin-top':0},velo, function(){
		animacion(num);
	});
}
for (var a = 0; a <= characters.length; a++) {
	animacion(a);
}


/*----- Elegir Personaje ------*/
var activaBox = true;
var elegidos = new Array();
$('.char').click(function(){
	if (activaBox) {
		var elID = Number( $(this).attr('data-id') );
		if (elegidos.indexOf(elID) < 0) {
			if (elegidos.length < 8) {
				elegidos.push(elID);
				$('#char-' + elID).addClass('elige');
				if (elegidos.length == 8) {
					$('#select-btn').animate({opacity:1},300);
				}
			}
			else {
				alertas('Ya has elegido a tus 8 personajes.');
			}
		}
		else {
			if (elegidos.length == 8) {
				$('#select-btn').animate({opacity:0.5},300);
			}
			var pos = elegidos.indexOf(elID);
			elegidos.splice(pos,1);
			$('#char-' + elID).removeClass('elige');
		}
		$('#select-titulo b').html('('+ elegidos.length +'/8)');
	}
});


/*----- Siguiente -----*/
function eligePos() {
	if (activaBox && elegidos.length == 8) {
		activaBox = false;
		for (var e = 0; e < elegidos.length; e++) {
			var elID = elegidos[e];
			$('#eligepos-'+ e +' .foto').attr('src','characters/'+ characters[elID].slug +'/1-standA.png');
			$('#eligepos-'+ e).attr('data-id', elID);
		}
		$('#eligepos').fadeIn(700, function(){
			activaBox = true;
		});
	}
}


/*----- Cambiar Posicion ------*/
var tempPos = -1;
function cambiaChar(pos) {
	if (tempPos >= 0 && activaBox && tempPos != pos) {
		activaBox = false;
		$('#eligepos-'+ tempPos +' .over').hide();
		var tempID = $('#eligepos-'+ tempPos).attr('data-id');
		var tempFoto = $('#eligepos-'+ tempPos).html();
		var newID = $('#eligepos-'+ pos).attr('data-id');
		var newFoto = $('#eligepos-'+ pos).html();
		$('#eligepos-'+ tempPos).animate({opacity:0}, 300);
		$('#eligepos-'+ pos).animate({opacity:0}, 300, function() {
			$('#eligepos-'+ tempPos).attr('data-id', newID);
			$('#eligepos-'+ tempPos).html(newFoto);
			$('#eligepos-'+ pos).attr('data-id', tempID);
			$('#eligepos-'+ pos).html(tempFoto);
			$('#eligepos-'+ tempPos).animate({opacity:1}, 300);
			$('#eligepos-'+ pos).animate({opacity:1}, 300, function() {
				tempPos = -1;
				activaBox = true;
			});
		});
	}
	else {
		tempPos = pos;
		$('#eligepos-'+ pos +' .over').show();
	}
}


/*----- Finalizar -----*/
function finalizaPos() {
	if (activaBox) {
		activaBox = false;
		var dataURL = '';
		for (var e = 0; e < elegidos.length; e++) {
			if (e == 0)	dataURL = dataURL + $('#eligepos-'+ e).attr('data-id');
			else		dataURL = dataURL +','+ $('#eligepos-'+ e).attr('data-id');
		}
		$.ajax({
			url	: 'saveSession.php',
			type: 'POST',
			data: {
				datos : dataURL,
				avatar: 'adell'
			}
		}).done(function(txt) {
			if (txt == 'Exito') saveCombate();
			else alertas(txt);
		});
	}
}


/*----- Busca Combate -----*/
function saveCombate() {
	alertas('Buscando Combate...', true);
	$.ajax({
		url	: 'saveCombate.php'
	}).done(function(txt) {
		if (txt == 'combate')		top.location.href = 'page-fight.php';
		else if (txt == 'espera')	checkCombate();
		else						alertas(txt, false);
	});
}


/*----- Check Combate -----*/
function checkCombate() {
	$.ajax({
		url	: 'checkCombate.php'
	}).done(function(txt) {
		if (txt == 'combate') {
			top.location.href = 'page-fight.php';
		} else if (txt == 'buscar') {
			setTimeout(function() {
				checkCombate();
			}, 750);
		} else {
			alertas(txt, false);
		}
	});
}


/*----- Alertas ------*/
function alertas(txt, loop) {
	activaBox = false;
	$('#alertas-cont p').html(txt);
	if (loop) {
		$('#alertas').stop().fadeIn(500);
	} else {
		$('#alertas').stop().hide().fadeIn(500).delay(3000).fadeOut(500, function() {
			activaBox = true;
		});
	}
}


/*----- Ajuste de Pantalla ------*
function detectaAnchoMax() {
	var anchoWidth = 100;
	var anchoConst = 4;
	var anchoMulti = 8;
	var anchoTemp = 0;
	var anchoNum = 2;
	var anchoMax = 0;
	
	var	w = window,
		d = document,
		e = d.documentElement,
		g = d.getElementsByTagName('body')[0],
		ancho = w.innerWidth || e.clientWidth || g.clientWidth;
	
	while (anchoMax == 0) {
		var elNum = (anchoNum*anchoWidth) + ((anchoNum-1)*anchoMulti) + anchoConst;
		if (ancho < elNum) {
			anchoMax = anchoTemp;
		}
		else {
			anchoTemp = elNum;
			anchoNum++;
		}
	}
	return anchoMax;
}

$(document).ready(function(e) {
	$('#select').width( detectaAnchoMax() );
});
$(window).resize(function() {
	$('#select').width( detectaAnchoMax() );
});
/**/