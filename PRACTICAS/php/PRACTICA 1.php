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
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .contenedor {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(15px);
        padding: 40px;
        border-radius: 20px;
        width: 350px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        text-align: center;
        color: white;
        animation: aparecer 0.8s ease-in-out;
    }

    @keyframes aparecer {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    h2 {
        margin-bottom: 25px;
        font-size: 24px;
        letter-spacing: 1px;
    }

    label {
        display: block;
        margin-top: 15px;
        text-align: left;
        font-size: 14px;
        opacity: 0.9;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border-radius: 10px;
        border: none;
        outline: none;
        font-size: 15px;
        transition: 0.3s;
    }

    input:focus {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(255,255,255,0.8);
    }

    button {
        margin-top: 25px;
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 30px;
        background: linear-gradient(45deg, #ff6a00, #ee0979);
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }

    .resultado {
        margin-top: 25px;
        font-size: 20px;
        font-weight: bold;
        padding: 10px;
        border-radius: 10px;
        background: rgba(255,255,255,0.2);
        animation: aparecer 0.5s ease-in-out;
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