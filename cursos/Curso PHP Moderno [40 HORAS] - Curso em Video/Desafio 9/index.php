<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $val1 = $_GET['val1'] ?? 1;
        $val2 = $_GET['val2'] ?? 1;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Valor 1</label>
            <input type="number" name="val1" id="idval1" value="<?= $val1?>" step="0.01">
            <label for="num">Peso 1</label>
            <input type="number" name="peso1" id="idpeso1" value="<?= $peso1?>" step="0.01">
            <label for="num">Valor 2</label>
            <input type="number" name="val2" id="idval2" value="<?= $val2?>" step="0.01">
            <label for="num">Peso 2</label>
            <input type="number" name="peso2" id="idpeso2" value="<?= $peso2?>" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $mediasimples = ($val1 + $val2)/2;
            $mediaponderada = (($val1 * $peso1) + ($val2 * $peso2)) / ($peso1 + $peso2);
            echo "<p> Analisando os Valores: <strong> $val1 e $val2 </strong></p>";
            echo "<p> A Média Simples é:<strong>" . number_format($mediasimples, 2, ",", ""). " </strong></p>";
            echo "<p> E a Média Ponderada é:<strong>" . number_format($mediaponderada, 2, ",", ""). " </strong></p>";

        ?>
    </section>
    
</body>
</html>