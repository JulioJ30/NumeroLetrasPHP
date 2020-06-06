<?php

    namespace lic\NumLetras;

    class NumeroLetras{


        public function NumeroRecursivo($numero){

            //RESULTADO
            $resultado ="";

            // NOMBRE DE LOS NUMEROS
            $unidades = ["", "Un", "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho", "Nueve", "Diez", "Once", "Doce", "Trece", "Catorce", "Quince", "Dieciséis", "Diecisiete", "Dieciocho", "Diecinueve", "Veinte", "Veintiuno", "Veintidos", "Veintitres", "Veinticuatro", "Veinticinco", "Veintiseis", "Veintisiete", "Veintiocho", "Veintinueve"];
            $decenas = ["", "Diez", "Veinte", "Treinta", "Cuarenta", "Cincuenta", "Sesenta", "Setenta", "Ochenta", "Noventa", "Cien"];
            $centenas = ["", "Ciento", "Doscientos", "Trescientos", "Cuatrocientos", "Quinientos", "Seiscientos", "Setecientos", "Ochocientos", "Novecientos"];


           

            if($numero == 0){
                $resultado = "CERO";
            }

            if($numero >= 1 && $numero <= 29){
                $resultado = $unidades[$numero];
            }

            if($numero >= 30 && $numero <= 100){
                $resultado  = $decenas[$numero / 10];
                $resultado .= $numero % 10 != 0 ? " y " . $this->NumeroRecursivo($numero % 10) : "";
            }

            if($numero >= 101 && $numero <= 999){
                $resultado  = $centenas[$numero / 100];
                $resultado .= $numero % 100 != 0 ? " " . $this->NumeroRecursivo($numero % 100) : "";
            }

            if($numero >= 1000 && $numero <= 1999){
                $resultado  = "MIL";
                $resultado .= $numero % 1000 != 0 ? " " . $this->NumeroRecursivo($numero % 1000) : "";
            }

            if($numero >= 2000 && $numero <= 999999){
                $resultado  = $this->NumeroRecursivo($numero/1000)  ." MIL ";
                $resultado .= $numero % 1000 != 0 ? " " . $this->NumeroRecursivo($numero % 1000) : "";
            }

            if($numero >= 1000000 && $numero <= 1999999){
                $resultado  = " UN MILLON ";
                $resultado .= $numero % 1000000 != 0 ? " " . $this->NumeroRecursivo($numero % 1000000) : "";
            }

            if($numero >= 2000000 && $numero <= 1999999999){
                $resultado  = $this->NumeroRecursivo($numero/1000000)  ." MILLONES ";
                $resultado .= $numero % 1000000 != 0 ? " " . $this->NumeroRecursivo($numero % 1000000) : "";
            }

   
            return strtoupper($resultado);

        }

        public function ConvertirNumLet($numero,$moneda = false,$centimos = false){

            $resultado = "";

            $letra = $this->NumeroRecursivo((floor($numero)));   

            //CALCULAMOS CENTIMOS
            $numcentimos = Round(($numero - floor($numero)) * 100);   

            // MONEDAS
            if($moneda != false){
                $letra .= " ". $moneda;
            }

            if($numcentimos > 0){
                if($numcentimos < 10){
                    $letra = $letra . " CON 0" . $numcentimos . "/100";
                }else{
                    $letra = $letra . " CON " . $numcentimos . "/100";
                }

                // CENTIMOS
                if($centimos != false){
                    $letra .= " CENTIMOS";
                }
            }

            
            

            $resultado = strtoupper($letra);

            return $resultado;
        
        }
    }


?>
