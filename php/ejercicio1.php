<?php
	$montoCompra = $_REQUEST['montoCompra'];
	$cantMeses = $_REQUEST['meses'];

	if(!(empty($montoCompra)||empty($cantMeses)))
	{

	$tarjetas = [0.03,0.035,0.04];
	$opcionTarjeta = $_REQUEST['tarjeta'];
	$cabecera =  include("../php/tableHeader.php");

	$deuda = $montoCompra;
	$pagoInteres =0;
	$pagoCapital=0;
	$cuota =  ($montoCompra*$tarjetas[$opcionTarjeta])/(1-(1+$tarjetas[$opcionTarjeta])**(-$cantMeses));

	for ($i=0; $i < $cantMeses; $i++) { 
		
		$pagoInteres = $deuda*$tarjetas[$opcionTarjeta];
		$pagoCapital = $cuota - $pagoInteres;
		$deuda-= $cuota-$pagoInteres;

		$cabecera.="<tr>";
		$cabecera.="<td>".($i+1)."</td>";
		$cabecera.="<td>". round($cuota,2)."</td>";
		$cabecera.="<td>".round($pagoInteres,2)."</td>";
		$cabecera.="<td>".round($pagoCapital,2)."</td>";	
		$cabecera.="<td>".round($deuda,2)."</td>";
		$cabecera.="</tr>";

	}
	echo 	$cabecera ;	
}else{
	echo "<p>Error: Ingrese los datos indicados!!!</p>";
}
?>