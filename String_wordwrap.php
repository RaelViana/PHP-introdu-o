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

    /* Utilização do wordwrap */
    $txt = " Este é um Exemplo de uma string longa que..." ; // Var String texto

    //wordwrap execulta uma quebra de linha tanto no texto visual quanto no código fonte HTML
    $res = wordwrap($txt,5,"<br>\n",true);  //neste caso é uma quebra de linha após 5 caracteres
    echo ($res);



    ?>
</body>
</html>
