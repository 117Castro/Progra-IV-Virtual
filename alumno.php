<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de alumnos</title>
</head>
<body>
    <form action="Procesar_datos_alumnos.php" method="POST">
        <label for="txtnombre">NOMBRE</label>
        <input type="text" name="txtnombre" id="txtnombre"require> 
<br><br>
        <label for="txtdireccion">DIRECCION</label>
        <input type="text" name="txtdireccion" id="txtdireccion"require title="Pone tu edad">
<br><br>
        <label for="txtedad">EDAD</label>
        <input type="text" name="txtedad" id="txtedad"require>
        <br><br>
<input type="submit" value="Enviar datos">

    </form>

</body>
</html>