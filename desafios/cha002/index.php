<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Numero aleatório</title>
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <main>
        <h1>Gerando número aleatório</h1>
        <?php 
            $numero = mt_rand();
            echo"<p>O valor gerado foi: $numero</p>"
            ?>
        <button onclick="javascript:document.location.reload()">Gerar novo número</button>
    </main>
</body>

</html>