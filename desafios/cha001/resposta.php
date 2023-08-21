<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ant e Sucss</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Resultado</h1>

        <?php 
                $num = $_REQUEST["numero"] ?? 0 ;
                $ant = $num  - 1;
                $sucess = $num  + 1;

                echo "<p>O numero escolhido foi $num</p>";
                echo "<p>Seu antecessor é $ant</p>";
                echo "<p>Seu sucessor é $sucess</p>";
            ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>