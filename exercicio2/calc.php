<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
		<?php
		 
				$salarioBruto = $_POST['salario'];
				$comissao = $_POST['comissao'];
				$imposto = 0;
				$adicionalNoturno = $_POST['adicional'];
				$beneficio = $_POST['beneficio'];
				$valorBeneficio = 0;
				
				if ($salarioBruto < 4000 && $salarioBruto > 2000){
					$imposto = $salarioBruto * 0.15;
				} elseif ($salarioBruto < 6000 && $salarioBruto > 4000){
					$imposto = $salarioBruto * 0.25;
				}

				if($beneficio == "vr"){
					$valorBeneficio = 200;
				} elseif ($beneficio == "va"){
					$valorBeneficio = 150;
				} elseif ($beneficio == "vt"){
					$valorBeneficio = 300;
				}				

			
				$salarioLiquido = $salarioBruto + $valorBeneficio + $comissao + $adicionalNoturno - $imposto;
				
				echo $salarioLiquido;
		 ?>
	</body>
</html>
