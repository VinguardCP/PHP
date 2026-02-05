<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $preco = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idpreco" value="<?= $preco?>" min="0.10" step="0.01">
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $reaj ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $aumento = $preco * $reaj / 100;
        $novopreco = $preco + $aumento;
    ?>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>O produto custava R$<?=number_format($preco, 2, ",", "")?> e que agora, com <strong><?= $aumento ?>% de aumento</strong>, vai passar a custar R$<strong><?=number_format($novopreco, 2, ",", "") ?></strong>!</p>
    </section>

    <script>
        mudaValor()

        function mudaValor(){
            p.innerText = reaj.value
        }
    </script>
    
</body>
</html>