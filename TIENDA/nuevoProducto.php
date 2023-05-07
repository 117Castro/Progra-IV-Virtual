<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>TIENDA</title>
</head>
<body>
    <h2>Crear un Nuevo Producto</h2>
    <div class="container">
        <form action="insertar.php" method="post">
            <label for="">Nombre del Producto</label>
            <input type="text" name="nombre" placeholder="Nombre del producto" required>

            <label for="">Descripcion del Producto</label>
            <input type="text" name="descripcion" placeholder="Descripcion del producto" required>

            <label for="">Precio del Producto</label>
            <input type="text" name="precio" placeholder="Precio del producto" required>

            <input type="submit" class="btn" value ="Guardar" name="guardar">
        </form>
    </div>
    
</body>
</html>