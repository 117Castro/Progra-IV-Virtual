<?php
$nombre = $_POST [ 'txtnombre' ];
$direccion = $_POST [ 'txtdireccion' ];
$edad = $_POST [ 'txtedad' ];
$mensaje = '';

if ( $edad >= 1 && $edad <= 2 ){
    $msj = 'Eres un bebe' ;
} else  if ( $edad <= 11 ){
    $msj = 'Eres un niño' ;
} else  if ( $edad <= 17 ){
    $msj = 'Eres un adolescente' ;
} else  if ( $edad <= 65 ){
    $msg = 'Eres un adulto, tienes responsabilidades' ;
} else  if ( $edad > 65 ){
    $mensaje = 'Larga Vida' ;
} más {
    $msg = 'Error en la edad' ;
}

echo " Hola $nombre ; vives en $direccion ; tu edad es: $edad ; $msj ";
?>