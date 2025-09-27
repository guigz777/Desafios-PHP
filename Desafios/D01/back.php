<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="layout.css">
</head>
<body>
    <main>
    <h1>Resultado final</h1>
    <p>
    <?php 
     $num= $_POST["num"];
     $ant=$num-1;
     $suc=$num+1;
     echo "O número escolhido foi " . "<b>" . $num . " </b>" . "<br>";
     echo "Seu <em> sucesor </em> é " . $suc . "<br>";
     echo "Seu <em> antecesor </em> é " . $ant;
    ?>
    <br>
    </p>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>