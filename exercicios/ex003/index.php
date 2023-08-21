<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>
            apresente-se
        </h1>
    </header>
    <form action="cad.php" method="get">
        <label for="nme">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">

        <input type="submit" value="Enviar">
    </form>
</body>

</html>