<?php
	class Calculadora {

		public function calcular($num1, $num2, $op){
			switch ($op) {
			    case "soma":
			        $result = $num1 + $num2;
			        echo $result;
			        break;
			    case "subtracao":
			        $result = $num1 - $num2;
			        echo $result;
			        break;
			    case "multiplicacao":
			        $result = $num1 * $num2;
			        echo $result;
			        break;
			    case "divisao":
			        $result = $num1 / $num2;
			        echo $result;
			        break;
			}
		}


	}
?>