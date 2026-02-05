<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteador de Números Aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <?php
            $numeroale = mt_rand(1,100); 
            echo "<p>O valor gerado foi <strong>$numeroale</strong></p>"
        ?>
        <button onclick="document.location.reload();">Gerar Outro</button>

    </section>
</body>
</html>