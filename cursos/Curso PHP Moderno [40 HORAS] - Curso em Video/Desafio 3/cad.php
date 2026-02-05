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

            $real = $_GET["real"] ?: "Não colocou valor";
            $dolar = $real / 5.25;
            echo "<p>Os seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
            echo "<p>Cotação Fixa de <strong>R$5,25</strong> informada diretamente no código!</p>";
        ?>
        <button onclick="javascript:window.location.href='desafio3.html'">Voltar</button>
    </main> 
</body>
</html>