<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
		<?php
		 
				$peso = $_POST['peso'];
				$altura = $_POST['altura'];
				$nome = $_POST['nome'];
				

			
				$imc = $peso/($altura * $altura);
				
				echo '<strong class="name">' . $nome . ' seu imc é:' . '</strong>';
				echo '<h2>' . $imc . '</h2>';
		 ?>
	</body>
</html>
