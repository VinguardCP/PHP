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
            $numero = $_GET["numero"] ?: "Sem número";
            $sucessor = $numero + 1;
            $antecessor = $numero - 1;
            echo "<p>O seu número é: <strong>$numero</strong>!</p>";
            echo "<p>O seu sucessor é: <strong>$sucessor</strong>!</p>";
            echo "<p>O seu antecessor é: <strong>$antecessor</strong>!</p>";
        ?>
        <button onclick="javascript:window.location.href='desafio1.html'">Voltar</button>
    </main> 
</body>
</html>