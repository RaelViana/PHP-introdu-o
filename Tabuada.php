<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $t = isset($_GET["val"]) ?  $_GET["val"] : 1; //recebe  e verifica valor digitado pelo usuário
        echo "<h1> Calculando a Tabuada de $t </h1>"; // Imprime  O valor escolhido

        $v = $t; // atribui o valor escolhido pelo usuário para inserir na tabuada
        $r = 1; // variavel para contador de 1 a 10
        while ($r >=1 & $r <= 10){ // enquanto valor for de 1 a 10 execulte

            $res = $r * $t;   // Mutliplica a variavel '$t' do usuário pelo contador  '$r'
            echo "<h2>$t x $r = $res  </h2>" ; // imprime o resultado da Multiplicação
            $r++; // incrementa mais um a multiplicação
        }
    ?>
    <a href="Tabuada.html">Voltar</a>
</body>
</html>

