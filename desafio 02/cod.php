<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado do numero</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
    <?php 
    $n = $_GET["num"];
    $randomico = rand(0,$n);
    echo "Gerando um número aleatório entre 0 e o $n<br>";
    echo "E o numero gerado aleatoriamente é o... <strong>$randomico</strong>";
    ?>
    </main>
</body>
</html>