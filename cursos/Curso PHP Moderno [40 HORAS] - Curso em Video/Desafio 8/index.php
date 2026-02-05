<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $numget = $_GET['num'];
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Salário "(R$)"</label>
            <input type="number" name="num" id="idnum" value="<?= $numget?>" step="0.01">
            <p>Vamos calcular a <strong> Raiz quadrada e Raiz cubica</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $quadrada = sqrt($numget);
            $cubica = pow($numget, 1/3);
            echo "<p> A partir do número: <strong> " . number_format($numget, 2, ",", ""). " </strong></p>";
            echo "<p> A Raiz quadrada é:<strong>" . number_format($quadrada, 2, ",", "."). " </strong></p>";
            echo "<p> E a Raiz cubica é:<strong>" . number_format($cubica, 2, ",", "."). " </strong></p>";

        ?>
    </section>
    
</body>
</html>