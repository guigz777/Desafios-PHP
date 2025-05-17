<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <main>
            <h1>Conversor de moedas V1</h1>
            <?php 
                $dinheiro=$_POST["dinheiro"];
                $soma=$dinheiro/5;
                echo "Seus R$ " . $dinheiro . " equivalem a U$ " . $soma;
            ?>
            <p>Cotação fixa de R$ 5</p>
            <br>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
    </body>
</html>