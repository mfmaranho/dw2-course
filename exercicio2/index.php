<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
		<form action="calc.php" method="post">
			<input type="tel" name="salario" placeholder="Salario Bruto"></input>
			<div>
				<input type="tel" name="comissao" placeholder="Comissão"></input>
			</div>		
			<label>Beneficio</label>
			<select  name="beneficio">
			  <option value="vr">VR</option>
			  <option value="va">VA</option>
			  <option value="vt">VT</option>
			</select>
			<div>
				<input type="tel" name="adicional" placeholder="Adicional Noturno"></input>
			</div>	
			</hr>
			<div>
				<button type="submit">Calcular</button>
				<button type="reset">Limpar</button>
			</div>	
		</form>	
	</body>
</html>