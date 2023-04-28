<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de números romanos</title>


    <style>

body {
            display: flex;
            justify-content: center;
            align-items: center;
           min-height: 50vh;
            background-color: white;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td, th {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        input[type="submit"]:hover {
            background-color: white;
        }

        th {
            background-color: blue;
            color: white;
        }

    </style> 

</head>
<body>
    <form method="post">
        <h1>Tabla de números Naturales/Romanos</h1>
        
        <label for="inicio">Inicio:</label><br>
        <input type="number" name="inicio" id="inicio" required min="1">
        <br>
        <label for="fin">Fin:</label><br>
        <input type="number" name="fin" id="fin" required min="1">
        <br><br>
        <input type="submit" value="Generar tabla">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = $_POST["inicio"];
        $fin = $_POST["fin"];

        
        if ($inicio >= $fin) {
            echo "<p>Error: el primer digito debe ser menor al segundo.</p>";
        } else {
            echo "<table>";
            echo "<thead><tr><th>Número</th><th>Romano</th></tr></thead>";
            echo "<tbody>";
            for ($i = $inicio; $i <= $fin; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>" . convertir_a_romano($i) . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
    }

    function convertir_a_romano($numero) {
        $romanos = array(
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1

            
        );
        $resultado = '';
        foreach ($romanos as $romano => $valor) {
            while ($numero >= $valor) {
                $resultado .= $romano;
                $numero -= $valor;
            }
        }
        return $resultado;
    }
    ?>
</body>
</html>
