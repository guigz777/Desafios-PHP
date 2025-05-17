<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Divisão</title>
        <link rel="stylesheet" href="layout.css">
    </head>
        <body>
        <?php
                $num= $_POST["num"] ?? 0;
                $num2= $_POST["num2"] ?? 1;
                $resul= (int)($num / $num2);
                $resto= $num % $num2;
                
            ?>
        <main>
            <h1>Anatomia de uma Divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
                <label for="num">Dividendo</label>
                <input type="number" name="num" id="idNum" value="<?=$num?>" min="0" required>

                <label for="num2">Divisor</label>
                <input type="number" name="num2" id="idNum2" value="<?=$num2?>" min="1" required>

                <input type="submit" value="Analisar">
            </form>
        </main>
        <section>
            <h2>Resultado da Divisão</h2>
            <table class="divisao">
                <?php
                    /*echo "Dividendo: " . number_format($num, 0, '.', '') . "<br>";
                    echo "Divisor: " . number_format($num2, 0, '.', '') . "<br>";
                    echo "Resto: " . number_format($resto, 0, '.', '') . "<br>";
                    echo "Resultado: " . number_format($resul, 0, '.', '') . "<br>";
                    */
                    echo "<tr>";
                    echo "<td>" . $num . "</td>";
                    echo "<td>" . $num2 . " </td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>" . $resto . "</td>";
                    echo "<td>" . $resul . "</td>";
                    echo "</tr>"
                ?>
            </table>
        </section>
    </body>
</html>