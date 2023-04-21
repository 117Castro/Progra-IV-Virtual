<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
      <h1>Calcular el total</h1>
      <form id="factura">
        <label for="nombre">Producto:</label>
        <input type="text" id="nombre" required><br><br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" min="1" step="0.01" required><br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" min="1" required><br><br><br>
        <button type="submit">Calcular total</button>
      </form>
      <div id="efectivo"></div>
    </div>
    <script>
      const factura = document.getElementById("factura");
      const efectivo = document.getElementById("efectivo");

      factura.addEventListener("submit", (event) => {
        event.preventDefault();

        const nombre = document.getElementById("nombre").value;
        const precio = parseFloat(document.getElementById("precio").value);
        const cantidad = parseInt(document.getElementById("cantidad").value);
        const Total = precio * cantidad;
        const cesc = Total * 0.05;
        const iva = Total * 0.13;
        const total = Total + cesc + iva;

        efectivo.innerHTML = `
          <h2>Resultado:</h2>
          <p>Producto: ${nombre}</p>
          <p>Subtotal: $${Total.toFixed(2)}</p>
          <p>CESC 5%: $${cesc.toFixed(2)}</p>
          <p>IVA 13%: $${iva.toFixed(2)}</p>
          <p>Total a pagar: $${total.toFixed(2)}</p>
        `;
      });
    </script>
</body>
</html>