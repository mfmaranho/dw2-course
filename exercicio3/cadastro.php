<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
		<?php 
			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$sexo = $_POST['sexo'];
			$endereco = $_POST['endereco'];
			$escolaridade = $_POST['escolaridade'];
			$cpf = $_POST['cpf'];
			$rg = $_POST['rg'];

			try {
				$myfile = fopen("cadastro.txt", "w") or die("Erro ao abrir arquivo!");
				$txt = $nome . "\n";
				fwrite($myfile, $txt);

				$txt = $idade . "\n";
				fwrite($myfile, $txt);

				$txt = $sexo . "\n";
				fwrite($myfile, $txt);

				$txt = $endereco . "\n";
				fwrite($myfile, $txt);

				$txt = $escolaridade . "\n";
				fwrite($myfile, $txt);

				$txt = $cpf . "\n";
				fwrite($myfile, $txt);

				$txt = $rg . "\n";
				fwrite($myfile, $txt);

				fclose($myfile);

				echo '<h1> Arquivo gravado com sucesso!</h1>';	
			} catch(Exception $e){
				echo 'Erro ao gravar arquivo: ',  $e->getMessage(), "\n";
			}
	 
		?>
	</body>
</html>
