<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Número Primo</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <section>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="num">Digite um número: </label>
            <input type="number" name="num" id="idNum" value="<?= isset($_POST['num']) ? $_POST['num'] : '' ?>" min="0"
                step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <main>
        <h2>Resultado final</h2>
        <?php 
            if (isset($_POST['num'])) {
                $num = intval($_POST['num']);
                $ehPrimo = true;

                if ($num < 2) {
                    $ehPrimo = false;
                } else {
                    for ($i = 2; $i <= sqrt($num); $i++) {
                        if ($num % $i == 0) {
                            $ehPrimo = false;
                            break;
                        }
                    }
                }

                if ($ehPrimo) {
                    echo "<p>O número <strong>$num</strong> é <strong>primo</strong>.</p>";
                } else {
                    echo "<p>O número <strong>$num</strong> <strong>não é primo</strong>.</p>";
                }
            }
        ?>
    </main>
</body>

</html>