<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parâmetro com passagem por referência</title>
</head>
<body>
    <?php

        /* Rotinas Externas Include*/
        include "Rotinas_Externas_Back.php"; // inclui metodos Back.php
        echo "<h1>Testando novas funções</h1>"; // print msg
        ola();  //função do Back.php
        mostrarValor(5);  //função do Back.php com valor '5' inserido pelo Front.php


    ?>
</body>
</html>

