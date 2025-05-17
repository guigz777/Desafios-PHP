<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="layout.css">
    </head>
        <body>
                <section>
                    <h1>Analisador de Número Real</h1>
                    <?php
                        $num= $_POST["num"];
                        $inteira=(int)$num;
                        $fra= $num - $inteira;
                        echo " <p>Analisando o número <b> $num </b> informado pelo usuário: </p>";
                        echo "
                        <ul>
                            <li>A parte inteira do número é: <b>$inteira</b></li>
                            <li>A parte fracionária do número é: <b>$fra</b></li>
                        </ul>"
                     
                    ?>
                    <a href="index.html"><button>Voltar</button></a>
                </section>
        </body>
</html>