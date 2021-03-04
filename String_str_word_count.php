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

    /* Utilização str_word_count */
    $frase = " Aprender PHP sempre mais " ; // Var String texto
    $cont = str_word_count($frase,0); //retorna a quantidade de palavras na frase
    print ($cont); // exibe o print com o Valor

    ?>
</body>
</html>
