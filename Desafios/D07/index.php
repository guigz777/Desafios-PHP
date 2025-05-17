<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salário Minimo</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <section>
            <h1>Informe seu Salário</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="num">Digite seu salário: </label>
                <input type="number" name="num" id="idNum" value="<?=$num?>" step="0.01" required>
                
                <input type="submit" value="Analisar">
                <p>Considerando o salário minimo de <b>R$ 1320,00</b></p>
            </form>
        </section>
            <main>
                <h2>Resultado final</h2>
                <?php 
                    $num= $_POST["num"] ?? 1320;
                    $soma= (int) ($num / 1320.00);
                    $resto= $num % 1320.00;
                    echo "Quem recebe um salário de R$ " . number_format($num, 2, ',', '') . " ganha <b>" . number_format($soma, 0, ',', '') . " salários minimos </b> + R$ " . number_format($resto, 2, ',', '');
                ?>
            </main>
    </body>
</html>