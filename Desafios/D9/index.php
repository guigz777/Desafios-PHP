<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Média</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <section>
            <h1>Média Aritmética</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="num">1° Valor</label>
                <input type="number" name="num1" id="idNum1" value="<?=$num1?>" step="0.01" required>

                <label for="num">1° Peso</label>
                <input type="number" name="peso1" id="idPeso1" value="<?=$peso1?>" step="0.01" required>

                <label for="num">2° Valor</label>
                <input type="number" name="num2" id="idNum2" value="<?=$num2?>" step="0.01" required>

                <label for="number">2° Peso</label>
                <input type="number" name="peso2" id="idPeso2" value="<?=$peso2?>" step="0.01" required>
                
                <input type="submit" value="Calcular Média">
            </form>
        </section>
        <main>
            <h2>Calculo das Médias</h2>
            <?php 
                $num1 = $_POST["num1"] ?? 1;
                $peso1 = $_POST["peso1"] ?? 1;
                $num2 = $_POST["num2"] ?? 1;
                $peso2 = $_POST["peso2"] ?? 1;
                $media = ($num1 + $num2) / 2;
                $mediap = ($peso1 * $num1 + $peso2 * $num2) / ($peso1 + $peso2);
                echo "Analisando os valores $num1 e $num2:";
                echo "<ul><li>A  Média <b>Aritmética Simples </b> entre os valores é igual a ".  number_format($media, 2, ',', '') . "</li></ul>";
                echo "<ul><li>A  Média <b>Aritmética Ponderada </b> com os pesos $peso1 e $peso2 é igual a: " . number_format($mediap, 2, ',', '') . "</li></ul>";
            ?>
        </main>
    </body>
</html>