<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Raiz de um Número</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <section>
            <h1>Informe um número</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="num">número: </label>
                <input type="number" name="num" id="idNum" value="<?=$num?>" step="0.01" required>
                
                <input type="submit" value="Calcular Raizes">
            </form>
        </section>
        <main>
            <?php
                $num = $_POST["num"] ?? 0;
                $raizq = sqrt($num);
                $raizc = pow($num, 1/3);
                echo "<h2>Resultado final</h2> ";
                echo "<p>Analisando o número $num, teremos: </p>";
                echo "<ul><li>A sua raiz quadrada é: " . number_format($raizq, 2, ',', '') . "</li></ul>";
                echo "<ul><li>A sua raiz cubica é:" . number_format($raizc, 2, ',', '') . "</li></ul>";
            ?>
        </main>
    </body>
</html>