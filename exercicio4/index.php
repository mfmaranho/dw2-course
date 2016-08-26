<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</header>
	<body>
        <form method="post" action="calc.php">
            <input type="text" name="num1" placeholder="Valor 1" />

            <select name="operacao">
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">*</option>
                <option value="divisao">/</option>
            </select>

            <input type="text" name="num2" placeholder="Valor 2" />

            <input type="submit" name="doCalc" value="Calcular" />
        </form>
	</body>
</html>