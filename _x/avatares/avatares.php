<?php
$avatares = array(
	array("Adell","adell"),
	array("Asagi","asagi"),
	array("Axel","axel"),
	array("Barbara","barbara"),
	array("Desco","desco"),
	array("Etna","etna"),
	array("Fenrich","fenrich"),
	array("Flonne","flonne_devil"),
	array("Fuuka","fuuka"),
	array("Mao","mao"),
	array("Peta","peta"),
	array("Pram","pram"),
	array("Rainier","rainier"),
	array("Raspberyl","raspberyl"),
	array("Rozalin","rozalin"),
	array("Sicily","sicily"),
	array("Pleinair","pleinair"),
	array("Valvatorez","valvatorez"),
	array("Vulcanus","vulcanus"),
	array("Xenolith","xenolith"),
	array("Zetta","zetta")
);
?>
<div id="hidden">
	<?php 
	foreach ($avatares as $avatar) :
		?><img src="avatares/<?php echo $avatar[1]; ?>-anima.png" /><?php
	endforeach;
	?>
</div>

<script type="text/javascript">
	//AVATARES
	var avatares = new Array();

	<?php 
	$num = 0;
	foreach ($avatares as $avatar) :
		?>avatares[<?php echo $num; ?>] = new Array("<?php echo $avatar[0]; ?>", "<?php echo $avatar[1]; ?>");<?php
		$num++;
	endforeach;
	?>
</script>