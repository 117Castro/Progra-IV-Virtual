<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Resultado de la compra</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      
      .container {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      
      h1, h2, p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <?php
        $nombre = $_POST["nombre"];
        $precio = floatval($_POST["precio"]);
        $cantidad = intval($_POST["cantidad"]);
        $subtotal = $