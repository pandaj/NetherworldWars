// Detecta si hay conexion a internet o no
window.internet = false;
function detectaConexion() {
	var conexion = window.navigator.onLine;
	if (conexion) {
		window.internet = true;
	} else {
		if (window.internet) {
			alert('Te has desconectado de internet.');
		}
		window.internet = false;
	}
	// Se reinicia cada 15 segundos
	setTimeout(function() {
		detectaConexion();
	}, 15 * 1000);
}
detectaConexion();