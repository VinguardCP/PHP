<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['divendo'] ?? 0;
        $valor2 = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Divisor de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="divendo">Dividendo</label>
            <input type="number" name="divendo" id="divendo" value="<?= $valor1?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Divisão</h2>
        <?php 
            $divisao = intdiv($valor1, $valor2);
            $resto = $valor1 % $valor2;
            echo "<p> O dividendo é:<strong> $valor1 </strong></p>";
            echo "<p> O divisor é:<strong> $valor2 </strong></p>";
            echo "<p> Resultado: <strong> $divisao </strong></p>";
            echo "<p> O resto é: <strong> $resto </strong></p>";
        ?>

        <table class="divisao">
            <tr>
                <td><?= $valor1 ?></td>
                <td><?= $valor2 ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $divisao ?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>