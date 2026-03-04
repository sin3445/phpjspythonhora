<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $h = intval($_POST["hora"]);
    $m = intval($_POST["minutos"]);

    if ($h == 12) $h = 0;

    if ($m == 0) {
        $mf = 0;
        $hf = 12 - $h;
    } else {
        $mf = 60 - $m;
        $hf = 12 - $h;
    }

    if ($hf <= 0) $hf += 12;

    $resultado = "Hora espejo: " . $hf . ":" . 
                 ($mf < 10 ? "0" . $mf : $mf);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hora Espejo en PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #0984e3;
        }

        label {
            display: block;
            margin-top: 15px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 6px;
            background-color: #0984e3;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0652dd;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            color: #2d3436;
            font-weight: bold;
        }
    </style>

</head>
<body>

<div class="contenedor">

    <h2>Calcular Hora Espejo</h2>

    <form method="POST">
        <label>Hora:</label>
        <input type="number" name="hora" min="1" max="12" required>

        <label>Minutos:</label>
        <input type="number" name="minutos" min="0" max="59" required>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado != ""): ?>
        <div class="resultado">
            <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

</div>

</body>
</html>