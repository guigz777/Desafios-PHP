<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas V1</title>
    <link rel="stylesheet" href="layout.css">
</head>

<body>
    <main>
        <h1>Conversor de moedas avançado</h1>
        <?php 
            $dinheiro = $_POST["dinheiro"] ?? 0;
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$inicio'&@dataFinalCotacao='$fim'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";
            
            $dados = json_decode(file_get_contents($url), true);

            if (isset($dados["value"][0]["cotacaoCompra"])) {
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                $soma = $dinheiro / $cotacao;
                echo "<p>Seus R$ " . number_format($dinheiro, 2, ',', '.') . " equivalem a U$ " . number_format($soma, 2, ',', '.') . "</p>";
                echo "<p>Cotação utilizada: R$ " . number_format($cotacao, 2, ',', '.') . "</p>";
            } else {
                echo "<p>Não foi possível obter a cotação do dólar.</p>";
            }
        ?>
        <br>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>