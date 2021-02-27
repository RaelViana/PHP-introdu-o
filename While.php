<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo fluxo repetição</title>
</head>
<body>
    <?php
        /* Contador incrementar */
        $c = 1 ; // Variável c recebe valor '1'

        while($c <= 10){  // enquanto 'valor' fo menor e igual a 10 execulte
            echo $c , "<br/>" ; // imprima 'valor'
            $c++;               // incremente mais 1 'valor'
        }
          echo "---------------------------------------------------------"; // Separador

        /* Contador decrementar */
        $b = 20 ; // Variável c recebe valor '1'

        while($b >= 0){  // enquanto 'valor' fo maior e igual a 1 execulte
            echo "<br/>", $b , "<br/>" ; // imprima 'valor'
            $b -= 2;               // decremente menos 2 'valor'
        }
    ?>
</body>
</html>