<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['salario'];
        $valor2 = 1621.00;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário "(R$)"</label>
            <input type="number" name="salario" id="salario" value="<?= $valor1?>" step="0.01">
            <p>Considerando um salário mínimo de <strong> R$ 1.621,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $divisao = intdiv($valor1, $valor2);
            $numint = $valor1 - ($divisao * 1621);
            //$resto = $valor1 % $valor2;
            echo "<p> Quem recebe um salário de: R$ <strong> " . number_format($valor1, 2, ",", "."). " </strong> ganha cerca de <strong> $divisao salários minímos + R$ " . number_format($numint, 2, ",", "."). " </strong></p>";

        ?>
    </section>
    
</body>
</html>