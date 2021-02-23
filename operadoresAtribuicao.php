<!doctype html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo</title>
</head>
<body>
    <?php

        /* Percentual */
        $preco = $_GET["p"]; //recebe um parâmetro preço digitado pelo usuário na URL
        echo "O preço do produto é R$ ". number_format($preco, 2); // formata o preço com duas casas decimais
        $preco += $preco*10/100; // método acrescenta 10% ao preço
        echo "<br/> E o novo preço com 10% de aumento será R$ " . number_format($preco,2);

        $preco -= $preco*5/100; // método desconta 10% ao preço
        echo "<br/> E o novo preço com 5% de desconto será R$ " . number_format($preco,2);

        /*Incremento  Decremento*/
        $Atual = $_GET["aa"];
        echo "<br/> O ano atual é $Atual e o ano anterior é " . --$Atual; // pré decrementa  um valor
        echo "<br/> O ano atual é $Atual e o próximo  ano é " . ++$Atual; // pré incrementa  um valor

        /* Variáveis Referenciadas*/
        $a = 3;
        $b = &$a; // referencia 'a' ao valor de 'b'
        $b += 5; //atribui 5 ao valor de b
        echo "<br/>A variável A vale $a";
        echo "<br/> A Variável B vale $b";

        /* Variáveis de Variáveis*/
        $x = "ABC";
        $$x = "DEF"; // atribui o valor DEF dentro da variável ABC
        echo "<br/>O Conteudo da variavel X é $x";
        echo "<br/>A Variavel criada recebeu o valor  $ABC";


    ?>
</body>
</html>
