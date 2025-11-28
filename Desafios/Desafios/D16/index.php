<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <section>
        <h1>Calculadora de IMC</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="peso">Peso (kg): </label>
            <input type="number" name="peso" id="idPeso" value="<?= isset($_POST['peso']) ? $_POST['peso'] : '' ?>"
                min="0" step="0.01" required>
            <br>
            <label for="altura">Altura (m): </label>
            <input type="number" name="altura" id="idAltura"
                value="<?= isset($_POST['altura']) ? $_POST['altura'] : '' ?>" min="0" step="0.01" required>
            <br>
            <input type="submit" value="Calcular IMC">
            <button type="button" onclick="document.location.href='../index.html'">Voltar</button>
        </form>
    </section>
    <main>
        <h2>Resultado final</h2>
        <?php 
            if (isset($_POST['peso']) && isset($_POST['altura'])) {
                $peso = floatval($_POST['peso']);
                $altura = floatval($_POST['altura']);
                if ($peso > 0 && $altura > 0) {
                    $imc = $peso / ($altura * $altura);
                    echo "<p>Seu IMC é <strong>" . number_format($imc, 2, ',', '.') . "</strong>.</p>";
                    if ($imc < 16) {
                        echo "<p>Classificação: <strong>Magreza grave</strong></p>";
                    } elseif ($imc < 17) {
                        echo "<p>Classificação: <strong>Magreza moderada</strong></p>";
                    } elseif ($imc < 18.5) {
                        echo "<p>Classificação: <strong>Magreza leve</strong></p>";
                    } elseif ($imc < 25) {
                        echo "<p>Classificação: <strong>Peso normal</strong></p>";
                    } elseif ($imc < 30) {
                        echo "<p>Classificação: <strong>Sobrepeso</strong></p>";
                    } elseif ($imc < 35) {
                        echo "<p>Classificação: <strong>Obesidade grau I</strong></p>";
                    } elseif ($imc < 40) {
                        echo "<p>Classificação: <strong>Obesidade grau II</strong></p>";
                    } else {
                        echo "<p>Classificação: <strong>Obesidade grau III (mórbida)</strong></p>";
                    }
                } else {
                    echo "<p>Informe valores válidos para peso e altura.</p>";
                }
            }
        ?>
    </main>
</body>

</html>