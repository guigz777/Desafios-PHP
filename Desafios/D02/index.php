<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorteio de números</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <main>
            <h1>Sorteio de números aleatorios</h1>
            <?php 
            $min=0;
                $max=100;
                $num=mt_rand($min, $max);
                echo "<p> Gerando um número aleatorio entre $min e $max... <br> O valor gerado foi <b>$num</b> <br>"
            ?>
            <button onclick="javascrpit:document.location.reload()">Sortear outro número</button>
        </main>
    </body>
</html>