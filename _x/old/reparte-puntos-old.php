<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<style>
		#aviso { padding:10px; color:#FFF; background:#F00; }
		a { margin-left:10px; padding:5px 10px; color:#FFF; background:#00F; text-decoration:none; }
		div { margin:10px; }
		span, b { width:40px; display:inline-block; }
	</style>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		var num = 50;
		var maxNum = 1600;
		var actualNum = 1600;
		
		function resta(indica) {
			var elNum = Number( $('#'+ indica +' b').html() );
			if (elNum > num) {
				elNum -= num;
				$('#'+ indica +' b').html(elNum);
				actualNum -= num;
				if (actualNum != maxNum) {
					$('#aviso').html('Excedente : ' + (actualNum - maxNum) );
				} else {
					$('#aviso').html('OK');
				}
			}
		}
		function suma(indica) {
			var elNum = Number( $('#'+ indica +' b').html() );
			if (elNum < 950) {
				elNum += num;
				$('#'+ indica +' b').html(elNum);
				actualNum += num;
				if (actualNum != maxNum) {
					$('#aviso').html('Excedente : ' + (actualNum - maxNum) );
				} else {
					$('#aviso').html('OK');
				}
			}
		}
	</script>
</head>
<body>
	<div id="aviso">OK</div>
	<div id="vid">
		<span>VID</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('vid');">-</a> <a href="javascript:void();" onclick="suma('vid');">+</a>
	</div>
    <div id="ene">
		<span>ENE</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('ene');">-</a> <a href="javascript:void();" onclick="suma('ene');">+</a>
	</div>
	<div id="atk">
		<span>ATK</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('atk');">-</a> <a href="javascript:void();" onclick="suma('atk');">+</a>
	</div>
    <div id="def">
		<span>DEF</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('def');">-</a> <a href="javascript:void();" onclick="suma('def');">+</a>
	</div>
	<div id="mag">
		<span>MAG</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('mag');">-</a> <a href="javascript:void();" onclick="suma('mag');">+</a>
	</div>
    <div id="res">
		<span>RES</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('res');">-</a> <a href="javascript:void();" onclick="suma('res');">+</a>
	</div>
	<div id="spd">
		<span>SPD</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('spd');">-</a> <a href="javascript:void();" onclick="suma('spd');">+</a>
	</div>
    <div id="acc">
		<span>ACC</span> : <b>200</b> 
		<a href="javascript:void();" onclick="resta('acc');">-</a> <a href="javascript:void();" onclick="suma('acc');">+</a>
	</div>
</body>
</html>