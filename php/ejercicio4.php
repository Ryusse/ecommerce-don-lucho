<?php
	if (isset($_POST['triangulo'])) {
		
		$a = $_POST['side1'];
		$b = $_POST['side2'];
		$c = $_POST['side3'];
		
		$verificacion = teoremaDesigualdad($a, $b, $c);
		
		if (substr($verificacion, 0, 15) == "ES UN TRIANGULO") {
			
			$triangulo = tipoTriangulo($a, $b, $c);
			$area = areaTriangulo($a, $b, $c);
			
			echo $verificacion . "<br>";
			echo $triangulo . "<br>";
			echo "Su area es: " . $area;
		}
	}
	
	function teoremaDesigualdad ($a, $b, $c) {
		$x = $a + $b;
		$y = $b + $c;
		$z = $c + $a;
		
		echo "<div style='display:flex; justify-content:center; margin-top:2rem;
            background:var(--grey-700); padding: 1.8rem; border-radius: 1rem;'>
                    Lados anotados : " . $a . " , " . $b . " y " . $c . "<br><br>";
		"</div>";
		
		// echo "Lados anotados : ".$a." , ".$b." y ".$c;
		// echo "<br>";
		
		if ($x > $c) {
			echo "  Teorema de la Desigualdad del Triangulo:<br>";
			echo $a . " + " . $b . " > " . $c . " ✔<br>";
			if ($y > $a) {
				echo $b . " + " . $c . " > " . $a . " ✔<br>";
				if ($z > $b) {
					echo $c . " + " . $a . " > " . $b . " ✔<br>";
					return "ES UN TRIANGULO POR TEOREMA DE LA DESIGUALDAD DEL TRIANGULO,";
				} else {
					echo $c . " + " . $a . " > " . $b . " ❌<br>";
					echo $z . " no es mayor que " . $b . " por lo tanto NO ES UN TRIANGULO";
				}
			} else {
				echo $b . " + " . $c . " > " . $a . " ❌<br>";
				echo $y . " no es mayor que " . $a . " por lo tanto NO ES UN TRIANGULO";
			}
		} else {
			echo $a . " + " . $b . " > " . $c . " ❌ <br>";
			echo $x . " no es mayor que " . $c . " por lo tanto NO ES UN TRIANGULO ";
		}
	}
	
	function tipoTriangulo ($a, $b, $c) {
		
		if ($b == $c && $a == $c) {
			return "Por tener 3 lados iguales, Equilatero";
		} else if ($a == $b || $a == $c) {
			return "Por tener 3 lados distintos, Isosceles";
		} else {
			return "Por tener 2 lados iguales, Escaleno";
		}
	}
	
	function areaTriangulo ($a, $b, $c) {
		$S = ($a + $b + $c) / 2;
		$areaTri = sqrt($S * ($S - $a) * ($S - $b) * ($S - $c));
		return round($areaTri, 2);
	}

?>