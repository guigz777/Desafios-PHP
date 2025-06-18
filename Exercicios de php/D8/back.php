<?php
function contarVogais($frase) {
    $frase = strtolower($frase);
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $quantidade = 0;
    for ($i = 0; $i < strlen($frase); $i++) {
        if (in_array($frase[$i], $vogais)) {
            $quantidade++;
        }
    }
    return $quantidade;
}

$frase = $_POST['palavra'];
$qtd = contarVogais($frase);
echo "A frase contém $qtd vogais.";
?>