<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatoração</title>
</head>
<body>

    <?php
        $v = isset($_GET["val"]) ?  $_GET["val"] : 1; //recebe  e verifica valor digitado pelo usuário
        echo "<h1> Calculando o fatorial de $v </h1>"; // Imprime  O valor escolhido
        $c = $v;      // atribui o valor v a variavel $c
        $fat = 1;    // cria variavel fatoração
        do {         //faça o comando
            $fat = $fat * $c;   // Mutliplica a variavel $fat por $c
            $c--;  //incrementa mais uma vez o valor de $c

        } while($c >= 1);  // enquanto $c for maior que 1 execulte
        echo "<h2>$v ! = $fat </h2>" ; // imprime o resultado da fatoração
    ?>
    <a href="fatorial.html" class="botao">Voltar</a> // retorna para o usuário digitar novamente
</body>
</html>
