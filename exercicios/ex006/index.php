<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $valor1= $_GET['v1'] ?? 0;
        $valor2= $_GET['v2'] ?? 0;
        
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da soma:</h2>
        <p>
            <?php 
                $soma = $valor1 + $valor2;
                echo "A soma do número $valor1 com o número $valor2 é igual a <strong>$soma</strong>!"
            ?>
        </p>
    </section>
</body>

</html>