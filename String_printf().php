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

    /* Utilização do printf */
    $prod = "leite";
    $prec = 4.5;

    // a variavel $prod é substituida por %s (string) e a variavel $prec por %f (float)
    printf("O %s custa R$ %.2f", $prod, $prec); // '%.2f' formata um float com duas casas decimais

    ?>
</body>
</html>

