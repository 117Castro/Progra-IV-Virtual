<?php
    require_once("productoClass.php");
    $datos = new Producto();
    $todos = $datos->traerTodos();
?>

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
    <h2>Listado de Productos</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php foreach($todos as $key => $prod):?>
        <tr>
            <td><?=$prod['nombre']?></td>
            <td><?=$prod['descripcion']?></td>
            <td><?=$prod['precio']?></td>
            <td>
                <a href="eliminar.php?id=<?php echo $prod['id']?>&req=delete" class="btn-1">Eliminar</a>
                <a href="editar.php?id=<?php echo $prod['id']?>" class="btn-2">Editar</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <a href="nuevoProducto.php" class="btn-2">Nuevo Producto</a>
    
</body>
</html>