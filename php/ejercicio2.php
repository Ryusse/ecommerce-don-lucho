<?php
        if(isset($_POST['register'])) {
            
            $cantidad = $_POST['cantidad'];

            echo "<div class='container py-3 bg-info mt-5 d-flex justify-content-center'>
                    Cantidad de numeros aleatorios: $cantidad
                </div>";

            // echo "Cantidad de numeros: ".$cantidad;

            echo "<br>";
            for ($i = 1; $i <= $cantidad; $i++) {
                $num = rand(300,2000);

                echo "<div class='container py-2 bg-warning d-flex justify-content-left'>"
                        .$i."° ".$num."  
                </div>";

                // echo $i."° ".$num." -> ";

                $suma = sumarNumeros($num);

                echo "<div class='container py-2 bg-success d-flex justify-content-center'>
                        <p class='text-white m-0'>La suma de digitos es: ".$suma."</p> 
                </div>";

                // echo "La suma de digitos es: ".$suma;
                // echo "<br>";

                $descripcion = tipoNumero($suma);

                echo "<div class='container py-2 bg-success d-flex justify-content-center'>
                        <p class='text-white m-0'>".$suma." es un numero: ".$descripcion."</p> 
                    </div>";

                // echo $num." es un numero: ".$descripcion;
                echo "<br>";
            }

        }

        function sumarNumeros($n) {
            return array_sum(str_split($n, 1));
        }

        function tipoNumero($Z) {
            if (($Z % 2) == 0) {
                return "PAR";
            } else {
                return "IMPAR";
            }
        }
    ?>