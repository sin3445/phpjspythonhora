<!DOCTYPE html>
<html>
<body style="background:#3776ab; color:white; text-align:center; margin-top:100px;">

<h2>Hora Espejo - Python</h2>

<form method="post">
    Hora: <input type="number" name="hora"><br>
    Minutos: <input type="number" name="minutos"><br>
    <input type="submit" value="Calcular">
</form>

<div style="margin-top:20px; font-weight:bold;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hora = $_POST["hora"];
    $minutos = $_POST["minutos"];

    $comando = "python3 hora.py $hora $minutos";
    $resultado = shell_exec($comando);

    echo $resultado;
}
?>
</div>

</body>
</html>