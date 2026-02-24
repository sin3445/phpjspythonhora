<?php

$h = $_POST["hora"];
$m = $_POST["minutos"];

if ($h == 12) $h = 0;

if ($m == 0) {
    $mf = 0;
    $hf = 12 - $h;
} else {
    $mf = 60 - $m;
    $hf = 11 - $h;
}

if ($hf <= 0) $hf += 12;

echo "Hora espejo: $hf:$mf";