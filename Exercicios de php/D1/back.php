    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $media = ($num1 + $num2 + $num3) / 3;

    echo "<p>Média: " . number_format($media, 2, ',', '.') . "</p>";
    echo '<a href="index.html">Calcular novamente</a>';
    ?>