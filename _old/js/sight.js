var nivel = 1;
function clickNivel(num) {
	if (nivel != num && activaTodo) {
		$('.nivel-'+ nivel).removeClass('elige');
		$('.nivel-'+ num).addClass('elige');
		nivel = num;
	}
}
var activaTodo = true;
var posBases = new Array(8);
for (var c = 1; c <= 7; c++) {
	var posNum = $('.carta-'+ c).css('left');
	posBases[c] = Math.round( posNum.replace('px', '') ) +'px';
	$(".carta-"+ c).flip({
		trigger: 'manual'
	});
}
function numAzar(ini, fin) {
	return Math.floor((Math.random() * fin) + ini);
}
azarNum = 0;
maximo = 3;
function clickJugar() {
	if (activaTodo) {
		activaTodo = false;
		$('.nivel').fadeOut(1000);
		for (var c = 1; c <= 7; c++) {
			$(".carta-"+ c).flip(true);
		}
		setTimeout(function() {
			azarNum = 0;
			maximo = 3;
			if (nivel == 1 || nivel == 2) {
				$('.carta-1').css('left', posBases[3]);
				$('.carta-2').css('left', posBases[4]);
				$('.carta-3').css('left', posBases[5]);
				$('.carta-4').hide();
				$('.carta-5').hide();
				$('.carta-6').hide();
				$('.carta-7').hide();
			}
			else if (nivel == 3 || nivel == 4) {
				$('.carta-1').css('left', posBases[2]);
				$('.carta-2').css('left', posBases[3]);
				$('.carta-3').css('left', posBases[4]);
				$('.carta-4').css('left', posBases[5]);
				$('.carta-5').css('left', posBases[6]);
				$('.carta-4').show();
				$('.carta-5').show();
				$('.carta-6').hide();
				$('.carta-7').hide();
				maximo = 5;
			}
			else {
				$('.carta-1').css('left', posBases[1]);
				$('.carta-2').css('left', posBases[2]);
				$('.carta-3').css('left', posBases[3]);
				$('.carta-4').css('left', posBases[4]);
				$('.carta-5').css('left', posBases[5]);
				$('.carta-6').css('left', posBases[6]);
				$('.carta-7').css('left', posBases[7]);
				$('.carta-4').show();
				$('.carta-5').show();
				$('.carta-6').show();
				$('.carta-7').show();
				maximo = 7;
			}
			azarNum = numAzar(1,maximo);
			$('.final').hide();
			$('.titulo').animate({'font-size':'8vh'}, 500);
			$('.carta-'+ azarNum +' .front').attr('src', 'sight/over-'+ nivel +'.jpg');
			$('.cartas').fadeIn(1000);
			setTimeout(function() {
				for (var c = 1; c <= maximo; c++) {
					$(".carta-"+ c).flip(false);
				}
			}, 1000);
			setTimeout(function() {
				for (var c = 1; c <= maximo; c++) {
					$(".carta-"+ c).flip(true);
				}
			}, 3000);
			setTimeout(function() {
				cartasShuffle();
			}, 4000);
		}, 1000);
	}
}
function cartasShuffle() {
	var speed = 500;
	var cartaRan1 = numAzar(1,maximo);
	var cartaRan2 = numAzar(1,maximo);
	while (cartaRan1 == cartaRan2) {
		cartaRan2 = numAzar(1,maximo);
	}
	var tempPos1 = $('.carta-'+ cartaRan1).css('left');
	tempPos1 = Math.round( tempPos1.replace('px', '') );
	var tempPos2 = $('.carta-'+ cartaRan2).css('left');
	tempPos2 = Math.round( tempPos2.replace('px', '') );
	var midPos = tempPos2 + ((tempPos1 - tempPos2) / 2)
	if (tempPos2 > tempPos1) {
		midPos = tempPos1 + ((tempPos2 - tempPos1) / 2)
	}
	$('.carta-'+ cartaRan1).css({'z-index':8});
	$('.carta-'+ cartaRan1).animate({'left':midPos+'px', 'zoom':1.1, 'top' : '2vh'}, speed, 'linear');
	$('.carta-'+ cartaRan2).css({'z-index':2});
	$('.carta-'+ cartaRan2).animate({'left':midPos+'px', 'z-index':2, 'zoom':0.9, 'top' : '-2vh'}, speed, 'linear');
	setTimeout(function() {
		$('.carta-'+ cartaRan1).animate({'left':tempPos2+'px', 'zoom':1, 'top' : '0'}, speed, 'linear');
		$('.carta-'+ cartaRan2).animate({'left':tempPos1+'px', 'zoom':1, 'top' : '0'}, speed, 'linear');
	}, speed);
	setTimeout(function() {
		$('.carta-'+ cartaRan1).css({'z-index':5});
		$('.carta-'+ cartaRan2).css({'z-index':5});
	}, (speed*2));
}