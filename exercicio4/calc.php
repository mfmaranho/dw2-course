<?php
	include_once('Calculadora.php');
	 
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$operacao = $_POST['operacao'];
	
    $calcular = new Calculadora();
    
    echo $calcular->Calcular($num1, $num2, $operacao);
?>
