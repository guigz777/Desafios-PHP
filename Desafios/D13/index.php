<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada interativa</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <section>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="num">Digite um número: </label>
            <input type="number" name="num" id="idNum" value="<?=$num?>" step="0.01" required>

            <label for="operacao">Escolha a operação:</label>
            <select name="operacao" id="operacao">
                <option value="multiplicacao" <?= (($_POST['operacao'] ?? '') == 'multiplicacao') ? 'selected' : '' ?>>
                    Multiplicação
                </option>
                <option value="divisao" <?= (($_POST['operacao'] ?? '') == 'divisao') ? 'selected' : '' ?>>Divisão
                </option>
            </select>

            <input type="submit" value="Calcular">
        </form>
    </section>
    <main>
        <h2>Resultado final</h2>
        <?php 
            $num = $_POST["num"] ?? 0;
            $operacao = $_POST["operacao"] ?? "multiplicacao";

            if ($operacao == "multiplicacao") {
                echo "<h3>Tabuada de multiplicação do " . number_format($num, 0, ',', '') . "</h3>";
                for ($c = 1; $c <= 10; $c++) {
                    $res = $num * $c;
                    echo number_format($num, 0, ',', '') . " x " . number_format($c, 0, ',', '') . " = " . number_format($res, 2, ',', '') . "<br>";
                }
            } else {
                echo "<h3>Tabuada de divisão do " . number_format($num, 0, ',', '') . "</h3>";
                for ($c = 1; $c <= 10; $c++) {
                    $res = $num / $c;
                    echo number_format($num, 0, ',', '') . " ÷ " . number_format($c, 0, ',', '') . " = " . number_format($res, 2, ',', '') . "<br>";
                }
            }
        ?>
    </main>
</body>

</html>