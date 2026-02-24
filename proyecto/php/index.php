<!DOCTYPE html>
<html>
<body style="background:#d8b4f8; text-align:center; margin-top:100px;">

<h2>Hora Espejo - Php</h2>

<form method="post">
    Hora: <input type="number" name="hora"><br>
    Minutos: <input type="number" name="minutos"><br>
    <input type="submit" value="Calcular">
</form>

<div style="margin-top:20px; font-weight:bold;">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "hora.php";
}
?>
</div>

</body>
</html>