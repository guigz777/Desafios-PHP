<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <?php 
            $total_segundos = $_POST["seg"] ?? 0;

        ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="seg">Qual o total de segundos?</label>
            <input type="number" name="seg" id="idSeg" min="0" step="1" value="<?=$total_segundos?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $seg = $total_segundos;
                $sobra = $total_segundos;
                $semana = (int)($sobra / 604800);
                $sobra = $sobra % 604800;
                $dia = (int)($sobra / 86400);
                $sobra = $sobra % 86400;
                $horas = (int)($sobra / 3600);
                $sobra = $sobra % 3600;
                $minuto = (int)($sobra / 60);
                $sobra = $sobra % 60;
                $total_segundos = $sobra;

                echo "<p>Analisando o valor que você digitou, $seg segundos equivalem  a um total de: </p>";
                echo "<ul>";
                echo "<li>$semana semanas</li>";
                echo "<li>$dia dias</li>";
                echo "<li>$horas horas</li>";
                echo "<li>$minuto minutos</li>";
                echo "<li>$total_segundos segundos</li>";
                echo "</ul>";
            ?>
    </section>
</body>

</html>