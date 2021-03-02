<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estrutura de repetição</title>
</head>
<body>
    <?php
    /**
     * Contador utilizando For
     * Exemplo:
     * 1) - >>> $i =1 <<< A variavel i recebe valor 1
     * 2) - >>> $i <=10 <<< Condição, enquanto for menor ou igual a 10 execulte
     * 3) - >>> $i ++ <<< Incremento, enquanto a condição for verdadeira  acrescente mais 1
     *
     */
        for ($i = 1; $i <= 10; $i++){
            echo "$i ";
        }

        echo " <br/>"; //Quebra de linha

        for ($i = 10; $i >= 1; $i --){ //Contagem Regressiva
            echo "$i ";
        }

        echo " <br/>"; //Quebra de linha

        for ($i = 1; $i <= 100; $i += 5){ //Contagem  de 0 a 100 com incremento de 5 em 5
            echo "$i ";
        }


    ?>
</body>
</html>
