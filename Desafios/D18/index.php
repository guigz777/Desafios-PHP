<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de CPF</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <section>
        <h1>Verificador de CPF</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="cpf">Digite o CPF: </label>
            <input type="text" name="cpf" id="idCpf" value="<?= isset($_POST['cpf']) ? $_POST['cpf'] : '' ?>" required>
            <input type="submit" value="Verificar">
        </form>
    </section>
    <main>
        <h2>Resultado final</h2>
        <?php 
            if (isset($_POST['cpf'])) {
                $cpf = preg_replace('/\D/', '', $_POST['cpf']); // Remove tudo que não for número

                if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
                    echo "<p>CPF inválido.</p>";
                } else {
                    // Validação do primeiro dígito
                    for ($t = 9; $t < 11; $t++) {
                        $soma = 0;
                        for ($c = 0; $c < $t; $c++) {
                            $soma += $cpf[$c] * (($t + 1) - $c);
                        }
                        $digito = ((10 * $soma) % 11) % 10;
                        if ($cpf[$c] != $digito) {
                            echo "<p>CPF inválido.</p>";
                            exit;
                        }
                    }
                    echo "<p>CPF válido!</p>";
                }
            }
        ?>
    </main>
</body>

</html>