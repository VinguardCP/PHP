<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 80px;
            margin: 4px;
        }
    </style>
</head>
<body>

    <?php
        // Capturando os dados do Formulário Retroalimentado
        $total = $_REQUEST['saque'] ?? '1';
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você quer sacar? (R$)</label>
            <input type="number" name="saque" id="idsaque" value="<?= $total?>" min="0" step="1" required>
            <p>Temos notas de: 100, 50, 20, 10, 5, 2 e Moeda de 1 Real</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $resto = $total;
        // Saque de 100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        // Saque de 50
        $tot50 = floor($resto / 50);
        $resto %= 50;
        // Saque de 20
        $tot20 = floor($resto / 20);
        $resto %= 20;
        // Saque de 10
        $tot10 = floor($resto / 10);
        $resto %= 10;
        // Saque de 5
        $tot5 = floor($resto / 5);
        $resto %= 5;
        // Saque de 2
        $tot2 = floor($resto / 2);
        $resto %= 2;
        // Saque de 1
        $tot1 = $resto;
    ?>

    <section id="resultado">
        <h2>Divisão das notas</h2>
        <p>No seu <strong>Saque de R$<?=number_format($total, 0, ",", ".") ?></strong>, o Caixa Eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"><?= $tot100 ?> Notas de 100 reais</li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"><?= $tot50 ?> Notas de 50 reais</li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"><?= $tot20 ?> Notas de 20 reais</li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"><?= $tot10 ?> Notas de 10 reais</li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"><?= $tot5 ?> Notas de 5 reais</li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"><?= $tot2 ?> Notas de 2 reais</li>
            <li><img src="imagens/1-real.jpg" alt="Nota de 1" class="nota"><?= $tot1 ?> Moedas de 1 real</li>
        </ul>
    </section>
    
</body>
</html>