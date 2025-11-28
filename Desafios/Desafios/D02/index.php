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
                /*$num2=mt_rand($min, $max);
                $num3=mt_rand($min, $max);
                $num4=mt_rand($min, $max);
                $num5=mt_rand($min, $max);
                $num6=mt_rand($min, $max);*/
                #echo "<p> Gerando um número aleatorio entre $min e $max... <br> O valor gerado foi <b>$num - $num2 - $num3 - $num4 - $num5 - $num6</b> <br>"
                echo "<p> Gerando um número aleatorio entre $min e $max... <br> O valor gerado foi <b>$num</b> <br>"
            ?>
            <button onclick="javascript:document.location.reload()" style="background-color: #2aa53bff; color: white;">Sortear outro número</button>
            <button type="button" onclick="document.location.href='../index.html'">Voltar</button>
        </main>
    </body>
</html>