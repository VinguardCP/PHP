<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        // Capturando os dados do Formulário Retroalimentado
        $total = $_REQUEST['seg'] ?? '0';
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total dos segundos?</label>
            <input type="number" name="seg" id="idseg" value="<?= $total?>" min="0" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $sobra = $total;
        // Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        //Total de Dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        //Total de Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        //Total de Minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        //Total de Dias
        $segundos = $sobra;
    ?>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Analisando o valor que você digitou, <?=number_format($total, 0, ",", ".") ?> segundos equivalem a um total de:</p>
        <ul>
            <li><?= $semana ?> Semanas</li>
            <li><?= $dia ?> Dias</li>
            <li><?= $hora ?> Horas</li>
            <li><?= $minuto ?> Minutos</li>
            <li><?= $segundos ?> Segundos</li>
        </ul>
    </section>
    
</body>
</html>