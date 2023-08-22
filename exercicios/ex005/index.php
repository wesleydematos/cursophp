<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <pre>
            <?php 
                // $_GET dados de requisições get
                // $_POST dados de requisições post
                // $_REQUEST dados de requisições em geral
                // $_ENV variáveis de ambiente
                // $_SERVER dados do servidor
                // $_FILES dados de arquivos
                // $GLOBALS mostra o conteudo de todas as superglobais

                // $_COOKIE dados para ser guardado em memoria do navegador
                setcookie("dia", "Terça", time() + 3600);
                var_dump($_COOKIE);

                // $_SESSION
                session_start();
                $_SESSION["teste"] = "funcionou";
            ?>
        </pre>

    </main>
</body>

</html>