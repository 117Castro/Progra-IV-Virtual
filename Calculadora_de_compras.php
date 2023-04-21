<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora de pago</h1>
	<form method="post" action="resultado.php">
		<label for="nombre">Nombre del producto:</label>
		<input type="text" id="nombre" name="nombre" required>
		<br>
		<label for="cantidad">Cantidad de productos:</label>
		<input type="number" id="cantidad" name="cantidad" min="1" required>
		<br>
		<label for="precio">Precio del producto:</label>
		<input type="number" id="precio" name="precio" min="0" step="0.01" required>
		<br>
		<button type="submit">Calcular</button>
	</form>
</body>
</html>