<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rotinas com Parâmetros</title>
</head>
<body>
    <?php

    /* Realiza a soma de um conjunto de Caracteres*/
    function soma(){
        $p = func_get_args(); //vetor de parâmetros
        $t = func_num_args(); //variavel de numero total de argumentos
        $s = 0;
        for($i = 0; $i < $t; $i++){
            $s +=  $p[$i];
        }
        return $s;  //retorna varavel '$s'
        }
        $r = soma(3, 5, 2, 8, 7);  // valores Atribuidos a soma
        echo "A Soma Dos Valores é $r"; // print resposta
    ?>
</body>
</html>
