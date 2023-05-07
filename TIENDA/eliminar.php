<?php
//incluimos el archibo que contiene la clase
require_once("productoClass.php");

$record = new Producto();

//controlamos si se presiono eliminar y si se envio el id para eliminar
if(isset($_GET['id']) && isset($_GET['req'])){
    $record->setId($_GET['id']);
    $record->eliminar();

    echo "<script> alert('Datos eliminados correctamente');document.location='listadoProductos.php' </script>";
}
?>