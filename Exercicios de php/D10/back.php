<?php
function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    $classificacao = "";

    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc < 25) {
        $classificacao = "Normal";
    } elseif ($imc < 30) {
        $classificacao = "Sobrepeso";
    } elseif ($imc < 40) {
        $classificacao = "Obesidade";
    } else {
        $classificacao = "Obesidade mórbida";
    }

    return array('imc' => $imc, 'classificacao' => $classificacao);
}

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$resultado = calcularIMC($peso, $altura);

echo "IMC: " . number_format($resultado['imc'], 2, ',', '.') . "<br>";
echo "Classificação: " . $resultado['classificacao'];
?>