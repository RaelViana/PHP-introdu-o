<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo</title>
</head>
<body>
    <?php

    /* Adição*/
    $n1 = 2; // var int 1
    $n2 = 3;// var int 2
    $s = $n1 + $n2; // concatena as váriaveis 1 e 2
    echo "A soma dos valores é = $s ","<br />"; //imprime o resultado da operação

    /* Subtração*/
    $e1 = 6; // var int 1
    $e2 = 3;// var int 2
    $t = $e1 - $e2; // concatena as váriaveis 1 e 2
    echo "A subtração dos valores é = $t","<br />";//imprime o resultado da operação

    /* Multiplicação*/
    $h1 = 2; // var int 1
    $h2 = 5;// var int 2
    $j = $h1 * $h2; // concatena as váriaveis 1 e 2
    echo "A multiplicação dos valores é = $j","<br />";//imprime o resultado da operação

    /* Divisão*/
    $p1 = 10; // var int 1
    $p2 = 5;// var int 2
    $k = $p1  / $p2; // concatena as váriaveis 1 e 2
    echo "A divisão dos valores é = $k","<br />";//imprime o resultado da operação

    /* Modulo*/
    $f1 = 40; // var int 1
    $f2 = 5;// var int 2
    $k = $f1  % $f2; // concatena as váriaveis 1 e 2
    echo "O resto da divisão dos valores é = $k","<br />";//imprime o resultado da operação
    echo "<br />";

    /* Utilizando método get que recebe valor
     da variável direto da barra de endereço >>http://127.0.0.1/OperadoresAritmeticos/Operadores.php?a=12&b=4<< */
    $z1 = $_GET["a"];
    $z2 = $_GET["b"];
    echo "<h2>Valores Recebidos : $z1 e $z2</h2>";

    echo "A soma vale ".($z1 + $z2);
    echo "<br/>A subtração vale ".($z1 - $z2);
    echo "<br/>A multiplicação vale ".($z1 * $z2);
    echo "<br/>A divisão vale ".($z1 / $z2);
    echo "<br/>O módulo vale ".($z1 % $z2);
    ?>




</body>
</html>