<?php
function ehPalindromo($palavra) {
    $palavra = strtolower(str_replace(' ', '', $palavra));
    $invertida = strrev($palavra);
    return $palavra === $invertida;
}

$palavra = $_POST['palavra'];
if (ehPalindromo($palavra)) {
    echo "A palavra \"$palavra\" é um palíndromo.";
} else {
    echo "A palavra \"$palavra\" não é um palíndromo.";
}
?>