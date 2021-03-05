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

            /* Utilização do Array */
            $n = array(3,5,8,2) ; // coleção de caracteres Int
            $n[] = 7; // cria um novo item e adiciona á coleção na utima posição
            print_r($n); // imprime os indices e valores do conjunto

            /* Array com indices personalizados */
            $v = array (3=>7,
                1=>4,
                0=>10,
                8=>6,
                5=>3);
            unset($v[8]); // exclui o vetor na posição indicada
            print_r($v);

            /* Utilização do Range */
            $c = range(5,20,5); //cria um vetor com posição inicial '5', posi final '20' , e acrescenta valor de 5 em 5
            print_r($c);

            /* Utilização do Foreach em Range */
            $c = range(5,20,5);
            foreach($c as $v){  //percorre o vetor e recebe s valores
                echo "<td>$v</td> ";
            }

            /* Array com Strings */
            $cad = array("nome"=> "Ana",
                "idade"=>23,
                "peso"=>68.5);
            print_r($cad);
            ?>
            </tr>
        </table>
    </pre>

</body>
</html>
