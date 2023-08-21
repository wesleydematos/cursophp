<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>exemplo</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Teste" . date("d/M") ;
        echo "\t hora" . date("G:i:s");

        const ESTADO = "RJ";
        $v = 300;
        var_dump($v);
        echo '$v';
        echo "$v";
        echo 'Moro no ' . ESTADO;
        echo "$v \"oi\"";
        echo <<<FRASE
        TESTE $v 
        FRASE
        
    ?>
</body>

</html>