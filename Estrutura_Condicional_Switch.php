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
        $n = isset($_GET["num"]) ? $_GET["num"] : 0 ; //pega 'num HTML' e joga na variavel $n
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1; //pega 'oper HTML' e joga em $o

        switch ($o){
            case 1:            //caso usuario escolha dobro (Multiplicase $n  por 2 )
                $r = $n * 2;
                break;
            case 2:           //caso usuario escolha cubo  ( $n elevado a 3)
                $r = pow($n, 3)  ;
                break;
            case 3 :          //caso usuario escolha raiz  ( $n ao quadrado 'sqtr')
                $r = sqrt($n);
        }
        echo "O Resultado da Operação foi $r <br/>"

    ?>
    <a href="Estrutura_Condicional_Switch.html">Voltar</a>  <!-- retorna para o usuario digitar novamente -->
</body>
</html>


