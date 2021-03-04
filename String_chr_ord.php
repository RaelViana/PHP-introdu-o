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

    /* Utilização do chr */
    $letra = chr(67) ; // recupera a letra do teclado cujo o código é '67'
    echo " a letra de código  67 é $letra <br/>"; // exibe o print com o Valor

    /* Utilização do ord */
    $letr = "F"; //especifica a letra
    $cod = ord($letr); // retorna o código da letra especificada
    print "O código da letra F  é $cod" ; //imprime o valor
    ?>
</body>
</html>
