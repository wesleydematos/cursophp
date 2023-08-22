<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php 
        $divisor= $_GET['divisor'] ?? 1;
        $dividendo = $_GET['dividendo'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"]  ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Ver resultado">
        </form>
    </main>
    <section>
        <h2>Estrutura de uma divisao</h2>
        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            // echo "<ul><li>Dividendo: $dividendo</li><li>Divisor: $divisor</li> <li>Quociente: $quociente</li> <li>Resto: $resto</li></ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo?></td>
                <td><?= $divisor?></td>
            </tr>
            <tr>
                <td><?= $resto?></td>
                <td><?= $quociente?></td>
            </tr>
        </table>
    </section>
</body>

</html>