<?php
require_once("productoClass.php");

$prod = new Producto();

//tomamos el id que viene de la página de listado
$id = $_GET['id'];
//al objeto prod le cargamos el id
$prod->setId($id);
//traemos de la bd el registro con dicho id (nos devovlera un arreglo con un elemento)
$record = $prod->traerUno();
$val = $record[0];

//controlamos si se presiono el boton actualizar
if(isset($_POST['actualizar'])){
    $prod->setNombre(($_POST['nombre']));
    $prod->setDescripcion(($_POST['descripcion']));
    $prod->setPrecio(($_POST['precio']));

    //ejecutamos el metodo que actualiza
    $prod->actualizar();

    echo "<script> alert('Datos actualizados correctamente');document.location='listadoProductos.php' </script>";
}


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
    <h2>Actualizar un Producto</h2>
    <div class="container">
        <form action="" method="post">
            <label for="">Nombre del Producto</label>
            <input type="text" name="nombre" placeholder="Nombre..." required value="<?php echo $val['nombre']?>">

            <label for="">descripcion del Producto</label>
            <input type="text" name="descripcion" placeholder="Descripcion..." required value="<?php echo $val['descripcion']?>">

            <label for="">Precio del Producto</label>
            <input type="text" name="precio" placeholder="Precio..." required value="<?php echo $val['precio']?>">

            <input type="submit" class="btn" value ="Actualizar" name="actualizar">
        </form>
    </div>
    
</body>
</html>