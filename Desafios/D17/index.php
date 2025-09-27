<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromo</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <section>
        <h1>Verificador de Palíndromo</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="texto">Digite uma palavra ou frase: </label>
            <input type="text" name="texto" id="idTexto" value="<?= isset($_POST['texto']) ? $_POST['texto'] : '' ?>"
                required>
            <input type="submit" value="Verificar">
        </form>
    </section>
    <main>
        <h2>Resultado final</h2>
        <?php 
            if (isset($_POST['texto'])) {
                $texto = $_POST['texto'];
                // Remove acentos, espaços e pontuação
                $normalizado = preg_replace('/[\W_]/u', '', mb_strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $texto)));
                $invertido = strrev($normalizado);

                if ($normalizado !== '' && $normalizado === $invertido) {
                    echo "<p><strong>\"$texto\"</strong> é um palíndromo!</p>";
                } else {
                    echo "<p><strong>\"$texto\"</strong> não é um palíndromo.</p>";
                }
            }
        ?>
    </main>
</body>

</html>