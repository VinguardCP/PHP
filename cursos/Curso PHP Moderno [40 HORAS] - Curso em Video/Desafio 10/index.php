<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Capturando os dados do Formulário Retroalimentado
        $anoatual = date("Y");
        $anonasc = $_GET['nasc'] ?? 2000;
        $anodese = $_GET['anodes'] ?? $anoatual;
    ?>
    <main>
        <h1>Calculo da sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Ano de Nascimento</label>
            <input type="number" name="nasc" id="nasc1" value="<?= $anonasc?>">
            <label for="num">Ano que você deseja saber sua Idade</label>
            <input type="number" name="anodes" id="idanodes" value="<?= $anodese?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $idade = $anodese - $anonasc;
            $idadeatual = $anoatual - $anonasc;
            echo "<p> Atualmente estamos em <strong>$anoatual</strong>, você tem ou vai completar <strong>$idadeatual</strong> anos!";
            echo "<p> Quem nasceu em <strong>$anonasc</strong> vai ter <strong>$idade</strong> anos em <strong>$anodese</strong>!";

        ?>
    </section>
    
</body>
</html>