<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>
    <?php

    /* Utilização do trim */
    $nome = "   José da Silva  " ; // Var String texto

    $novo = trim($nome);  // Retona a String, remove os espaços antes e depois do texto
    echo ($novo);
    echo (strlen($novo)); // exibe a quantidade de caracteres depois da remoção de espaços

    ?>
</body>
</html>
