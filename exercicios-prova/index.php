<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<?php $conn = mysqli_connect("localhost", "root", "root", "revisao");
	$estados = mysqli_query($conn, "SELECT 'nome' FROM 'estado'");
	print $estados;
	 ?>
	<body>
        <form method="post" action="Cadastro.php">
            <input type="text" name="nome" placeholder="Nome" />
						<select name='estado'>
							<?php
								foreach ($adados as $opt)
								{
									$select .= "<option value={$opt[1]}> {$opt[0]} </option>";
								}
								echo $select;
							?>
						</select>


            <input type="submit" name="doCalc" value="Salvar" />
        </form>
	</body>
</html>
