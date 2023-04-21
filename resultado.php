<!DOCTYPE html>
<html>
<head>
	<title>Resultados de la calculadora</title>
</head>
<body>
	<h1>Resultados de la calculadora</h1>
	<?php
    $nombre = $_POST["nombre"];
		$cantidad = $_POST["cantidad"];
		$precio = $_POST["precio"];
		$subtotal = $cantidad * $precio;
		$cesc = $subtotal * 0.05;
		$iva = $subtotal * 0.13;
		$total = $subtotal + $cesc + $iva;
	?>
    <p>Nombre del producto: <?php echo $nombre; ?></p>
	<p>Subtotal: $<?php echo number_format($subtotal, 2); ?></p>
	<p>CESC (5%): $<?php echo number_format($cesc, 2); ?></p>
	<p>IVA (13%): $<?php echo number_format($iva, 2); ?></p>
	<p>Total a pagar: $<?php echo number_format($total, 2); ?></p>
</body>
</html>