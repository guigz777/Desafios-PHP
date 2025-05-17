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
                $inicio=date("m-d-Y",strtotime("-7 days"));
                $fim= date("m-d-Y");
                $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $fim . '\'&@dataFinalCotacao=\'' . $inicio . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados=json_decode(file_get_contents($url), true);
                $cotacao=$dados["value"][0]["cotacaoCompra"];
                $soma=$dinheiro/$cotacao;
                echo "Seus R$ " . $dinheiro . " equivalem a U$ " . $soma;
            ?> 
            <p>Cotação fixa de R$ 5</p>
            <br>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
    </body>
</html>