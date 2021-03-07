<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vetores E Matrizes</title>
</head>
<body>
    <pre>
        <table border="1"><tr>
            <?php

            /* Array elementos */
            $v = array("A","K","J","S") ; // coleção de Strings
            $tot = count($v); // retorna a quandidade de indices
            echo "Meu vetor tem $tot elementos <br/>"; // imprime os indices

            var_dump($v); // exibe um print mais completo com indice , tipo e valores dos vetores

            array_push($v,"N"); // Inclui mais um elemento  no final do Conjunto
            print_r($v);

            array_unshift($v, "T"); // Inclui mais um elemento no inicio da coleção
            print_r($v);

            array_shift($v); // remove o primeiro elemento da coleção
            print_r($v);

            array_pop($v); // remove o utimo elemento da coleção
            print_r($v);

            sort($v); // aloca os vetores na ordem crescente (A-B-C, 1-2-3)
            print_r($v);

            rsort($v); //  aloca os vetores na ordem decrescente (C-B-A, 3-2-1)
            print_r($v);




            ?>
            </tr>
        </table>
    </pre>

</body>
</html>
