<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Compra</title>
	<style>
		form {
			margin: 20px;
		}

		input {
			width: 200px;
			padding: 5px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		button[type=submit] {
			background-color: transparent;
			color: inherit;
			padding: 8px 16px;
			border: none;
			cursor: pointer;
		}

		.resultado {
			margin-top: 20px;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.etiqueta {
			display: inline-block;
			width: 100px;
		}
	</style>
</head>
<body>
	<form id="formulario">
		<h2>Calculadora de Compra</h2>
		<label class="etiqueta" for="nombre">Nombre del producto:</label>
		<input type="text" id="nombre" required><br>
		<label class="etiqueta" for="precio">Precio del producto:</label>
		<input type="number" id="precio" min="1" step="0.01" required><br>
		<label class="etiqueta" for="cantidad">Cantidad:</label>
		<input type="number" id="cantidad" min="1" required><br>
		<button type="submit">Calcular</button>
	</form>
	<div id="resultado" class="resultado"></div>
	<script>
		const formulario = document.getElementById("formulario");
		const resultado = document.getElementById("resultado");

		formulario.addEventListener("submit", (event) => {
			event.preventDefault();

			const nombre = document.getElementById("nombre").value;
			const precio = parseFloat(document.getElementById("precio").value);
			const cantidad = parseInt(document.getElementById("cantidad").value);
			const subtotal = precio * cantidad;
			const cesc = subtotal * 0.05;
			const iva = subtotal * 0.13;
			const total = subtotal + cesc + iva;

			resultado.innerHTML = `
				<h2>Resultado:</h2>
				<p>Producto: ${nombre}</p>
				<p>Subtotal: $${subtotal.toFixed(2)}</p>
				<p>CESC (5%): $${cesc.toFixed(2)}</p>
				<p>IVA (13%): $${iva.toFixed(2)}</p>
				<p>Total a pagar: $${total.toFixed(2)}</p>
			`;
		});
	</script>
</body>
</html>