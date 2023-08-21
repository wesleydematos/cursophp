<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Inteiro</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Numero inteiro</h1>
        <?php 
            $num = $_POST["numero"] ?? 0;

            echo "<p>Analisando o número real <strong>" . number_format($num, 2, ",", ".")  . "</strong>informado:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteira do número é: <strong>" . number_format($int, 0, ",", ".")  . 
            "</strong></li> <li>A parte fracionária do número é: <strong>". number_format($fra, 2, ",", ".") ."</strong></li></ul>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>