<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>resultado</h1>

    <?php 
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];

        echo "É um prazer te conhecer $nome $sobrenome!"
    ?>
</body>

</html>