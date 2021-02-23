<!doctype html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo</title>
    <style>
        h2{
            font: 15 arial;
            color: #0b1448;
        }
    </style>
</head>
<body>
    <?php
        $v1= $_GET["x"];
        $v2= $_GET["y"];
        echo "<h2>Valores recebidos : $v1 e $v2</h2>";
        echo "O Valor Absoluto de $v2 e" .abs($v2); //valor absoluto que v2 pode atingir
        echo "<br/>O Valor de $v1<sup> $v2</sup> é " . pow($v1, $v2); //metodo de potenciação
        echo "<br/>A raiz de  $v1 é " . sqrt($v1); //Raiz quadrada
        echo "<br/>O Valor de $v2 arredondado é " . round($v2);// Arredondamento
        echo "<br/>A parte inteira de  $v2 é " . intval($v2);//Valor inteiro da váriavel
        echo "<br/>O Valor de $v1 em moeda é R$" . number_format($v1, 2, ",","."); //formatação de numeros
    ?>
</body>
</html>
