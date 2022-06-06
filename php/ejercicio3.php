<?php
	
	$n1 = $_POST['nro1'];
	$n2 = $_POST['nro2'];
	$n3 = $_POST['nro3'];
	$max = $n1;
	
	if ($n2 > $max) $max == $n2;
	
	if ($n3 > $max) $max == $n3;
	
	$i = $max;
	while (($i % $n1 != 0) || ($i % $n2 != 0) || ($i % $n3 != 0)) {
		$i++;
	}

?>

<p>MCM : <?= $i ?></p>
