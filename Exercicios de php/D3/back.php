<?php
function parOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}

$numero = $_POST['num1'];
echo "O número $numero é " . parOuImpar($numero) . ".";
?>