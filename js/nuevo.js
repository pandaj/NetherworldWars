var avatarElige = -1;

function botonAvatar(btn) {
	$("#avatar-" + btn).click(function(){
		if (avatarElige != btn) {
			if (avatarElige != -1) {
				$("#avatar-" + btn).removeClass('elegido');
			}
			$("#NUEVO-personaje input").val( avatares[btn].slug );
			$("#avatar-" + btn).addClass('elegido');
			avatarElige = btn;
		}
	});
}

$(document).ready(function(e) {
	for (a = 0; a < avatares.length; a++) {
		var contAvatar = '<li id="avatar-' + a + '"><img src="avatars/' + avatares[a].slug + '-full.png"><p>' + avatares[a].nombre + '</p></li>';
		$("#NUEVO-elige").append(contAvatar);
		botonAvatar(a);
	}
});