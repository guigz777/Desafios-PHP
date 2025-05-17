<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculo de idade</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <?php

            $idade  = $_POST["idade"] ?? date("Y");
            $ano = $_POST["ano"] ?? date("Y");
        ?>
        <section>
            <h1>Calculando sua idade</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="idade">Digite o ano que você nasceu:  </label>
                <input type="number" name="idade" id="idIdade" value="<?=$num?>" min="1900" max="<?=$ano?>" step="0" required>

                <label for="ano">Quer saber sua idade em que ano ? (atualmente estamos em <b><?=date("Y")?></b>): </label>
                <input type="number" name="ano" id="idAno" value="<?=$ano?>" min="1900">

                <input type="submit" value="Qual sera minha idade ?">
            </form>
        </section>
        <main>
            <h2>Resultado</h2>
            <?php   
            $soma = $ano - $idade;  
             echo "Quem nasceu em $idade vai ter <b>$soma anos</b> em $ano!";
            ?>
        </main>
    </body>
</html>