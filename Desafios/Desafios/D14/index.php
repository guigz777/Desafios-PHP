<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial de um Número</title>
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
            <button type="button" onclick="document.location.href='../index.html'">Voltar</button>
        </form>
    </section>
    <main>
        <h2>Resultado final</h2>
        <?php 
            if (isset($_POST['num'])) {
                $num = intval($_POST['num']);
                $fatorial = 1;
                if ($num == 0 || $num == 1) {
                    $fatorial = 1;
                } else {
                    for ($i = 2; $i <= $num; $i++) {
                        $fatorial *= $i;
                    }
                }
                echo "<p>O fatorial de <strong>$num</strong> é <strong>$fatorial</strong>.</p>";
            }
        ?>
    </main>
</body>

</html>