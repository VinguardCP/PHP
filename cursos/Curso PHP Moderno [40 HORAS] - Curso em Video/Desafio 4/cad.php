<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Este é o resultado</h1>
    </header>
    <main>
        <?php 
            $padrao = numfmt_create("us", NumberFormatter::CURRENCY);

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $real = $_GET["real"] ?: "Não colocou valor";
            $dolar = $real / $cotacao;
            echo "<p>Os seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
            echo "<p>Cotação atualizada usando <strong>API do Banco Central</strong> atualizada diariamente!</p>";
        ?>
        <button onclick="javascript:window.location.href='desafio4.html'">Voltar</button>
    </main> 
</body>
</html>