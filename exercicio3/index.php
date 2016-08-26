<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
		<form action="cadastro.php" method="post">
			<input type="text" name="nome" placeholder="Nome"></input>
			<div>
				<input type="tel" name="idade" placeholder="Idade"></input>
		
				<label>Sexo</label>
				<select  name="sexo">
				  <option value="m">Masculino</option>
				  <option value="f">Feminino</option>
				</select>
			</div>
			<div>		
				<input type="text" name="endereco" placeholder="Endereço"></input>
				<input type="tel" name="tel" placeholder="Telefone"></input>
			</div>	
				<input type="text" name="escolaridade" placeholder="Escolaridade"></input>
			<div>
				<input type="tel" name="cpf" placeholder="CPF"></input>
				<input type="tel" name="rg" placeholder="RG"></input>
			</div>
			</hr>
			<div>
				<button type="submit">Salvar</button>
				<button type="reset">Limpar</button>
			</div>	
		</form>	
	</body>
</html>