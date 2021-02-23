<!doctype html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo</title>
</head>
<body>
    <?php

        /* Comparação */
        $n1 = $_GET["a"]; //recebe valor do usuario
        $n2 = $_GET["b"]; //recebe valor do usuario
        $tipo = $_GET["op"]; //recebe o tipo de operação que usuario escolher

        echo "Os valores informados foram $n1 e $n2 <br/>"; // print dos valores escolhidos pelo usuario
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; //operação caso usuario digite 's' será somado, se digitar outra letra multiplicas-se
        echo  "O resultado será $r";

        /* Igual idêntico */
        $x = 3;
        $y = "3";
        $res = ($x === $y) ? "Sim":"Não"; //utilizando 3 sinais de '=' verifica-se se os tipos e valores são idênticos
        echo "<br/>As variáveis X e Y são identicas ? $res";

        /* Situação */
        $nota1 = 5;
        $nota2 = 5;
        $nota3 = 6;
        $m = ($nota1+$nota2+$nota3)/3; // método calcula a média de tres valores
        echo  " <br/>A media entre $nota1, $nota2 e $nota3 é = " .number_format($m,2);
        $sit = ($m <6) ?"REPROVADO" : "APROVADO";
        echo "<br/>O aluno está $sit";

        /* Eleições */
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "<br/> Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade >=18 && $idade <65) ?"OBRIGATÓRIO" : "NÃO OBRIGATÓRIO"; // verifica se as duas condições são verdadeiras e execulta
        echo "<br/> O voto é $tipo";


    ?>
</body>
</html>
