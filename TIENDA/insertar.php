
<?php
//controlamos si se presiono el boton guardar
if(isset($_POST['guardar'])){
    //incluimos el archivo que tienela clase Producto
    require_once("productoClass.php");

    //creamos un objeto de clase Producto
    $producto = new Producto();

    //inicializamos el objeto mediante los setters con los valores
    //recibios del formulario
    $producto->setNombre($_POST['nombre']);
    $producto->setDescripcion($_POST['descripcion']);
    $producto->setPrecio($_POST['precio']);

    //llamamos al metodo que inserta en la BD
    $producto->insertarDatos();

    echo "<script> alert('Datos guardados correctamente');document.location='listadoProductos.php' </script>";
}

?>