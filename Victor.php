<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
  h1 {
  color: #444;
  text-align: center;
}

form {
  max-width: 500px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: block;
  margin-bottom: 10px;
}
input[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
           

        }
        th, td {
  padding: 10px;
  text-align: center;
  border: 1px solid #ddd;
}
table {
  margin-top: 20px;
  border-collapse: collapse;
  width: 100%;
}

</style>


<body>
	<h1>Conversor de números a romanos</h1><br>
	<form action="victor.php" method="post">
		<label for="inicio">Número de inicio:</label>
		<input type="number" id="inicio" name="inicio" required>
		<label for="fin">Número de fin:</label>
		<input type="number" id="fin" name="fin" required>
		<input type="submit" value="Convertir">
	</form>
    <?php
class ConversorRomano {
  private $romanos = array(
    'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
    'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
    'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
  );

  public function convertir($numero) {
    $resultado = '';
    foreach ($this->romanos as $romano => $valor) {
      while ($numero >= $valor) {
        $resultado .= $romano;
        $numero -= $valor;
      }
    }
    return $resultado;
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $inicio = $_POST['inicio'];
  $fin = $_POST['fin'];

  if ($inicio == '' || $fin == '') {
    echo 'Los campos no pueden estar vacíos.';
  } elseif ($inicio >= $fin) {
    echo 'El número de inicio debe ser menor que el número de fin.';
  } else {
    $conversor = new ConversorRomano();
    echo '<table>';
    echo '<tr><th>Número</th><th>Romano</th></tr>';
    for ($i = $inicio; $i <= $fin; $i++) {
      echo '<tr><td>'.$i.'</td><td>'.$conversor->convertir($i).'</td></tr>';
    }
    echo '</table>';
  }
}
?>

</body>
</body>
</html>
