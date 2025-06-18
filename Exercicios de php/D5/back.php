<?php
function fatorial($n) {
    $resultado = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

$numero = $_POST['num1'];
echo "O fatorial de $numero é " . fatorial($numero) . ".";
?>