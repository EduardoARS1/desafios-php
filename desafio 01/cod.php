<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
        <section>
            <h1>Resultado Final</h1>
            <?php 
            $n = $_GET["num"];
            echo "O número escolhido foi o <strong>$n</strong><br>";
            $n = $n + 1;
            echo "O número posterior é o $n<br>";
            $n = $n - 2;
            echo "O número anterior é o $n";
            ?>
            <input type="submit" value="Voltar">
            <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
        </section>
</body>
</html>