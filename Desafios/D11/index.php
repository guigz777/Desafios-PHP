<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reajuste de Preço</title>
        <link rel="stylesheet" href="layout.css">
    </head>
    <body>
        <?php 
            $preco = $_POST["preco"] ?? 0;
            $reajuste = $_POST["reajuste"] ?? 0;
        ?>
        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="preco">Preço do produto (R$)</label>
                <input type="number" name="preco" id="idpreco" value="<?=$preco?>" step="0.01" required>

                <label for="reajuste">Qual sera o percentual de reajuste ? (<b><span id="p">?</span>%</b>)</label>
               <input type="range" name="reajuste" id="idReajuste" value="<?=$reajuste?>" min = "0" max = "100" step="1" oninput="mudaValor()">

                <input type="submit" value="Reajustar">
            </form>
        </main>
        <section>
            <?php
                $soma = ($preco * $reajuste / 100) + $preco;
                echo "<h2>Resultado do reajuste</h2> ";
                echo "<p>O produto que custava R$$preco, com <b>$reajuste% de aumento</b> vai passar a custar <b>R$$soma</b> a partir de agora.</p>";   
            ?>
        </section>
        <script>
            mudaValor()
            function mudaValor(){
                p.innerText = idReajuste.value;
            }
        </script>
    </body>
</html>